<?php

declare(strict_types=1);

use Seo\Robots\RobotsTxt;
use Seo\Robots\RobotsTxtDirective;
use Seo\Robots\RobotsTxtGroup;
use Seo\Robots\RobotsTxtRenderer;

it('should render nothing for an empty robots', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [];

    $sitemaps = [];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual('');
});

it('should render a group with user agent and directive', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [
        new RobotsTxtGroup(['*'], [new RobotsTxtDirective('Disallow', '')]),
    ];

    $sitemaps = [];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual("User-agent: *\nDisallow:");
});

it('should render a group with multiple user agents and multiple directives', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ];

    $sitemaps = [];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual("User-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed");
});

it('should render multiple groups', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [
        new RobotsTxtGroup(
            ['*'],
            [new RobotsTxtDirective('Disallow', '/')],
        ),
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ];

    $sitemaps = [];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual("User-agent: *\nDisallow: /\n\nUser-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed");
});

it('should render a sitemap', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [];

    $sitemaps = [
        'https://example.com/sitemap.xml',
    ];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual('Sitemap: https://example.com/sitemap.xml');
});

it('should render multiple sitemaps', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [];

    $sitemaps = [
        'https://example.com/sitemap.xml',
        'https://www.example.com/sitemap.xml',
    ];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual("Sitemap: https://example.com/sitemap.xml\nSitemap: https://www.example.com/sitemap.xml");
});

it('should render groups and sitemaps', function (): void {
    $renderer = new RobotsTxtRenderer();

    $groups = [
        new RobotsTxtGroup(
            ['*'],
            [new RobotsTxtDirective('Disallow', '/')],
        ),
        new RobotsTxtGroup(
            ['Googlebot-News', 'AdsBot-Google'],
            [new RobotsTxtDirective('Disallow', '/not-allowed'), new RobotsTxtDirective('Allow', '/not-allowed/allowed')],
        ),
    ];

    $sitemaps = [
        'https://example.com/sitemap.xml',
        'https://www.example.com/sitemap.xml',
    ];

    $robots = new RobotsTxt($groups, $sitemaps);

    expect($renderer->render($robots))->toEqual("User-agent: *\nDisallow: /\n\nUser-agent: Googlebot-News\nUser-agent: AdsBot-Google\nDisallow: /not-allowed\nAllow: /not-allowed/allowed\n\nSitemap: https://example.com/sitemap.xml\nSitemap: https://www.example.com/sitemap.xml");
});
