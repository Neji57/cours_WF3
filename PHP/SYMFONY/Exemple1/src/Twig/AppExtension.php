<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('filter_name', [$this, 'parseIcons'], ['is_safe' => ['html']]),
        ];
    }

    public function getFunctions(): array
    {
        return [

        ];
    }

    public function doSomething($value)
    {
        return preg_replace('/\.icon-([a-z0-9-]+)/', '<i class="fa fa-$1"></i>', $text);
    }
}
