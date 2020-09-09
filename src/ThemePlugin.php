<?php

namespace Voyager\TestbenchPlugin;

use Voyager\Admin\Contracts\Plugins\ThemePlugin as ThemeBase;

class ThemePlugin implements ThemeBase
{
    public $name = 'Theme';
    public $description = 'A testbench theme';
    public $repository = 'voyager-admin/voyager-testbench-plugin';
    public $website = 'https://github.com/voyager-admin/voyager-testbench-plugin';
    public $version = '1.0.0';

    public function provideCSS(): string
    {
        return 'body { background-color: red; }';
    }
}