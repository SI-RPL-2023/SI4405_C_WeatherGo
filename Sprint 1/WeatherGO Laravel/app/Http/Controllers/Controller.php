<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function menuMain()
    {
        return view('menu-main');
    }

    public function menuFooter()
    {
        return view('menu-footer');
    }

    public function menuColors()
    {
        return view('menu-colors');
    }

    public function about()
    {
        return view('page-about');
    }
}
