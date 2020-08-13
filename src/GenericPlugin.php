<?php

namespace Voyager\TestbenchPlugin;

use Illuminate\Support\Facades\Route;
use Voyager\Admin\Contracts\Plugins\GenericPlugin as GenericBase;

class GenericPlugin implements GenericBase
{
    public $name = 'Generic';
    public $description = 'A testbench generic plugin';
    public $repository = 'voyager-admin/voyager-testbench-plugin';
    public $website = 'https://github.com/voyager-admin/voyager-testbench-plugin';
    public $version = '1.0.0';
}