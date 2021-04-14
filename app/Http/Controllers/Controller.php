<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function phones()
    {
    
        return view('phones/list', [
            'title' => 'Phone\'s list',
        ]);
    }
    public function test()
    {
        dd('test');
    }
}
