<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class IndexController extends Controller
{
    public function index()
    {
        return inertia(
            'Index/Index',
            [
                'messageFrom' => 'test message from controller'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
