<?php

declare(strict_types=1);

use Seo\Robots\RobotsTxt;
use Seo\Robots\RobotsTxtBuilder;
use Seo\Robots\RobotsTxtDirective;
use Seo\Robots\RobotsTxtGroup;
use Seo\Robots\RobotsTxtGroupBuilder;
use Seo\Robots\RobotsTxtParser;
use Seo\Robots\RobotsTxtRenderer;

it('should build a group with a single agent and directive', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->disallow('/'),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')])],
        [],
    ));
});

it('should build a group with multiple agents and multiple directives', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('Googlebot-News')
                ->agent('AdsBot-Google')
                ->disallow('/not-allowed')
                ->allow('/not-allowed/allowed'),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        )],
        [],
    ));
});

it('should build multiple groups', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->disallow('/'),
        )
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('Googlebot')
                ->allow('/'),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [
            new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')]),
            new RobotsTxtGroup(['Googlebot'], [new RobotsTxtDirective('Allow', '/')]),
        ],
        [],
    ));
});

it('should build sitemaps only', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->sitemap('https://example.com/sitemap.xml')
        ->sitemap('https://www.example.com/sitemap.xml')
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [],
        ['https://example.com/sitemap.xml', 'https://www.example.com/sitemap.xml'],
    ));
});

it('should build groups and sitemaps', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->disallow('/'),
        )
        ->sitemap('https://example.com/sitemap.xml')
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '/')])],
        ['https://example.com/sitemap.xml'],
    ));
});

it('should support disallow with empty path', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->disallow(),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '')])],
        [],
    ));
});

it('should support crawl-delay directive', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->crawlDelay(10),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Crawl-delay', '10')])],
        [],
    ));
});

it('should support generic directive', function (): void {
    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('Yandex')
                ->directive('Clean-param', 'ref /articles'),
        )
        ->build()
    ;

    expect($robots)->toEqual(new RobotsTxt(
        [new RobotsTxtGroup(['Yandex'], [new RobotsTxtDirective('Clean-param', 'ref /articles')])],
        [],
    ));
});

it('should throw when building a group without agents', function (): void {
    expect(
        fn () => (new RobotsTxtBuilder())
            ->group(
                fn (RobotsTxtGroupBuilder $g) => $g
                    ->disallow('/'),
            )
            ->build(),
    )
        ->toThrow(InvalidArgumentException::class, 'A group must have at least one user-agent')
    ;
});

it('should roundtrip: build then render then parse produces equivalent result', function (): void {
    $renderer = new RobotsTxtRenderer();
    $parser = new RobotsTxtParser();

    $robots = (new RobotsTxtBuilder())
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('*')
                ->disallow('/admin')
                ->allow('/admin/public'),
        )
        ->group(
            fn (RobotsTxtGroupBuilder $g) => $g
                ->agent('Googlebot')
                ->agent('Bingbot')
                ->disallow('/'),
        )
        ->sitemap('https://example.com/sitemap.xml')
        ->sitemap('https://www.example.com/sitemap.xml')
        ->build()
    ;

    $rendered = $renderer->render($robots);
    $parsed = $parser->parse($rendered);

    expect($parsed)->toEqual($robots);
});
