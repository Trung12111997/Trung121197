<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Demo34Controller extends Controller
{
    public function index() {
        echo "<br>" . __METHOD__;
        /**
         * trả về folder
         * resources/views/demo3/index.blade.php
         */
        return view("Demo34.index");
    }

    public function create() {
        echo "<br>" . __METHOD__;
        /**
         * trả về folder
         * resources/views/demo3/create.blade.php
         */
        return view("Demo34.create");
    }
}
