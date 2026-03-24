<?php

declare(strict_types=1);

use Seo\Robots\RobotsTxt;
use Seo\Robots\RobotsTxtDirective;
use Seo\Robots\RobotsTxtGroup;

it('should allow when no groups exist', function (): void {
    $robots = new RobotsTxt([], []);

    expect($robots->isAllowed('Googlebot', '/anything'))->toBeTrue();
});

it('should allow when no directives match', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/admin')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/public'))->toBeTrue();
});

it('should disallow by simple prefix', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/admin')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/admin'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/admin/settings'))->toBeFalse();
});

it('should allow by Allow directive', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Allow', '/public')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/public'))->toBeTrue();
});

it('should let longest match win when Allow is more specific', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [
            new RobotsTxtDirective('Disallow', '/admin'),
            new RobotsTxtDirective('Allow', '/admin/public'),
        ])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/admin'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/admin/settings'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/admin/public'))->toBeTrue();
    expect($robots->isAllowed('Googlebot', '/admin/public/page'))->toBeTrue();
});

it('should let longest match win when Disallow is more specific', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [
            new RobotsTxtDirective('Allow', '/admin'),
            new RobotsTxtDirective('Disallow', '/admin/secret'),
        ])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/admin'))->toBeTrue();
    expect($robots->isAllowed('Googlebot', '/admin/secret'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/admin/secret/deep'))->toBeFalse();
});

it('should let Allow win on equal-length patterns', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [
            new RobotsTxtDirective('Disallow', '/path'),
            new RobotsTxtDirective('Allow', '/path'),
        ])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/path'))->toBeTrue();
});

it('should match wildcard * in patterns', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/*.pdf')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/file.pdf'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/dir/file.pdf'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/file.html'))->toBeTrue();
});

it('should match end anchor $ in patterns', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/*.pdf$')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/file.pdf'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/file.pdf?q=1'))->toBeTrue();
});

it('should match agent by case-insensitive prefix', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('Disallow', '/')])],
        [],
    );

    expect($robots->isAllowed('Googlebot-News', '/'))->toBeFalse();
    expect($robots->isAllowed('googlebot', '/'))->toBeFalse();
});

it('should prefer most specific agent group', function (): void {
    $robots = new RobotsTxt(
        [
            new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('Disallow', '/')]),
            new RobotsTxtGroup(['Googlebot-News'], [new RobotsTxtDirective('Allow', '/')]),
        ],
        [],
    );

    expect($robots->isAllowed('Googlebot-News', '/'))->toBeTrue();
    expect($robots->isAllowed('Googlebot', '/'))->toBeFalse();
});

it('should fall back to wildcard agent group', function (): void {
    $robots = new RobotsTxt(
        [
            new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/secret')]),
            new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('Allow', '/')]),
        ],
        [],
    );

    expect($robots->isAllowed('Bingbot', '/secret'))->toBeFalse();
    expect($robots->isAllowed('Bingbot', '/public'))->toBeTrue();
});

it('should allow everything when Disallow value is empty', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '')])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/'))->toBeTrue();
    expect($robots->isAllowed('Googlebot', '/anything'))->toBeTrue();
});

it('should ignore non-Allow/Disallow directives during matching', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [
            new RobotsTxtDirective('Crawl-delay', '10'),
            new RobotsTxtDirective('Disallow', '/admin'),
        ])],
        [],
    );

    expect($robots->isAllowed('Googlebot', '/admin'))->toBeFalse();
    expect($robots->isAllowed('Googlebot', '/public'))->toBeTrue();
});

it('should return the inverse of isAllowed', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/admin')])],
        [],
    );

    expect($robots->isDisallowed('Googlebot', '/admin'))->toBeTrue();
    expect($robots->isDisallowed('Googlebot', '/public'))->toBeFalse();
});

it('should return crawl delay for matching agent', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Crawl-delay', '10')])],
        [],
    );

    expect($robots->crawlDelayFor('Googlebot'))->toBe(10);
});

it('should return null crawl delay when no group matches', function (): void {
    $robots = new RobotsTxt([], []);

    expect($robots->crawlDelayFor('Googlebot'))->toBeNull();
});

it('should return null crawl delay when group has no Crawl-delay directive', function (): void {
    $robots = new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')])],
        [],
    );

    expect($robots->crawlDelayFor('Googlebot'))->toBeNull();
});

it('should resolve crawl delay for the most specific agent group', function (): void {
    $robots = new RobotsTxt(
        [
            new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Crawl-delay', '5')]),
            new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('Crawl-delay', '30')]),
        ],
        [],
    );

    expect($robots->crawlDelayFor('Googlebot'))->toBe(30);
    expect($robots->crawlDelayFor('Bingbot'))->toBe(5);
});
