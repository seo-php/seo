<?php

declare(strict_types=1);

use Seo\Robots\RobotsTxt;
use Seo\Robots\RobotsTxtDirective;
use Seo\Robots\RobotsTxtGroup;
use Seo\Robots\RobotsTxtParseException;
use Seo\Robots\RobotsTxtParser;
use Seo\Robots\RobotsTxtRenderer;

it('should parse an empty string', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse('');

    expect($robots->groups)->toEqual([]);
    expect($robots->sitemaps)->toEqual([]);
});

it('should parse a group with a single agent and directive', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: *\nDisallow:");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '')]),
    ]);
    expect($robots->sitemaps)->toEqual([]);
});

it('should parse a group with multiple agents and multiple directives', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ]);
    expect($robots->sitemaps)->toEqual([]);
});

it('should parse multiple groups separated by blank lines', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: *\nDisallow: /\n\nUser-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(
            ['*'],
            [new RobotsTxtDirective('Disallow', '/')],
        ),
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ]);
    expect($robots->sitemaps)->toEqual([]);
});

it('should parse sitemaps only', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("Sitemap: https://example.com/sitemap.xml\nSitemap: https://www.example.com/sitemap.xml");

    expect($robots->groups)->toEqual([]);
    expect($robots->sitemaps)->toEqual([
        'https://example.com/sitemap.xml',
        'https://www.example.com/sitemap.xml',
    ]);
});

it('should parse groups and sitemaps', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: *\nDisallow: /\n\nUser-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed\n\nSitemap: https://example.com/sitemap.xml\nSitemap: https://www.example.com/sitemap.xml");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(
            ['*'],
            [new RobotsTxtDirective('Disallow', '/')],
        ),
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ]);
    expect($robots->sitemaps)->toEqual([
        'https://example.com/sitemap.xml',
        'https://www.example.com/sitemap.xml',
    ]);
});

it('should ignore comment-only lines', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("# This is a comment\nUser-agent: *\n# Another comment\nDisallow: /");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')]),
    ]);
});

it('should strip inline comments from values', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: * # all bots\nDisallow: /secret # hidden path");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/secret')]),
    ]);
});

it('should preserve original casing of directives', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("user-agent: Googlebot\ndisallow: /path");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('disallow', '/path')]),
    ]);
});

it('should throw on a malformed line without a colon', function (): void {
    $parser = new RobotsTxtParser();

    expect(fn () => $parser->parse("User-agent: *\nthis is invalid"))
        ->toThrow(RobotsTxtParseException::class, 'Invalid line 2')
    ;
});

it('should throw when a directive appears before any user-agent', function (): void {
    $parser = new RobotsTxtParser();

    expect(fn () => $parser->parse('Disallow: /path'))
        ->toThrow(RobotsTxtParseException::class, 'Directive without a preceding User-agent at line 1')
    ;
});

it('should roundtrip: render then parse produces equivalent result', function (): void {
    $renderer = new RobotsTxtRenderer();
    $parser = new RobotsTxtParser();

    $original = new RobotsTxt(
        [
            new RobotsTxtGroup(
                ['*'],
                [new RobotsTxtDirective('Disallow', '/')],
            ),
            new RobotsTxtGroup(
                ['Googlebot-News', 'AdsBot-Google'],
                [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
            ),
        ],
        [
            'https://example.com/sitemap.xml',
            'https://www.example.com/sitemap.xml',
        ],
    );

    $rendered = $renderer->render($original);
    $parsed = $parser->parse($rendered);
    $renderedAgain = $renderer->render($parsed);

    expect($renderedAgain)->toEqual($rendered);
    expect($parsed)->toEqual($original);
});

it('should handle windows-style line endings', function (): void {
    $parser = new RobotsTxtParser();

    $robots = $parser->parse("User-agent: *\r\nDisallow: /");

    expect($robots->groups)->toEqual([
        new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')]),
    ]);
});
