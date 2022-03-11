<?php

namespace App\Http\Controllers\Kakeibo;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class HomeKakeiboController extends Controller
{
    /**
     * @return Application|Factory|View
     */
    public function __invoke()
    {
        return view('home');
    }
}
