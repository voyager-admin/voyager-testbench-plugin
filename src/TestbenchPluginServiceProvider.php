<?php

namespace Voyager\TestbenchPlugin;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class TestbenchPluginServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Voyager\TestbenchPlugin\GenericPlugin::class);
        $pluginmanager->addPlugin(\Voyager\TestbenchPlugin\ThemePlugin::class);
    }

    public function register()
    {
        //
    }
}