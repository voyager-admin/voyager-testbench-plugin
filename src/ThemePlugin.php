<?php

namespace Voyager\TestbenchPlugin;

use Voyager\Admin\Contracts\Plugins\ThemePlugin as ThemeBase;

class ThemePlugin extends ThemeBase
{
    public $name = 'Theme';
    public $description = 'A etstbench theme';
    public $repository = 'voyager-admin/voyager-testbench-plugin';
    public $website = 'https://github.com/voyager-admin/voyager-testbench-plugin';
    public $version = '1.0.0';

    public function registerProtectedRoutes()
    {
        //
    }

    public function registerPublicRoutes()
    {
        Route::get('theme-plugin.css', function () {
            $response = response('body { background-color: red; }', 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('theme-plugin');
    }

    public function provideCss(): array
    {
        return [
            route('theme-plugin')
        ];
    }
}