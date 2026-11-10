<?php

declare(strict_types=1);

use Seo\Head\Head;

it('renders the layout component', function (): void {
    expect(renderLayout())->toMatchSnapshot();
});

it('renders the layout component with head tags', function (): void {
    configureHead(function (Head $head): void {
        $head->title('Page Title');
        $head->meta(name: 'description', content: 'A page description');
        $head->html(lang: 'en');
    });

    expect(renderLayout('Hello world'))->toMatchSnapshot();
});

it('renders slot content inside the body', function (): void {
    configureHead(function (Head $head): void {
        $head->title('Slot Test');
    });

    expect(renderLayout('<main>Custom content</main>'))->toContain('<main>Custom content</main>');
});

it('renders tags added while rendering the slot', function (): void {
    $html = renderLayout(<<<'BLADE'
@php
    app(\Seo\Head\Head::class)
        ->title('Slot Title')
        ->script(async: true, id: 'slot-script', src: 'https://example.com/slot.js', tagPosition: \Seo\Head\HeadTagPosition::BodyClose);
@endphp
<main>Custom content</main>
BLADE);

    expect($html)->toContain('<title>Slot Title</title>')
        ->and($html)->toContain('<script async id="slot-script" src="https://example.com/slot.js"></script>')
        ->and($html)->toContain('<main>Custom content</main>')
    ;
});
