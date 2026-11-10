<?php

declare(strict_types=1);

namespace Seo\Head\Laravel\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Seo\Head\Head;

final class Layout extends Component
{
    public function __construct(private readonly Head $head) {}

    public function render(): Closure
    {
        // Blade evaluates the closure after rendering the slot, so tags added by its contents are included.
        return fn (): View => $this->view('head::components.layout', $this->head->render());
    }
}
