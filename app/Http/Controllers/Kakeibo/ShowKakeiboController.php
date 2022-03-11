<?php

namespace App\Http\Controllers\Kakeibo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ShowKakeiboController extends Controller
{
    /**
     * @param  Request  $request
     * @return View
     */
    public function __invoke(Request $request): View
    {
        $calculate_results = $request->session()->all();
        $request->session()->flush();

        $sum_each = $calculate_results['sum_all'] / 2;
        $difference = abs($sum_each - $calculate_results['sum_01']);

        return view('kakeibo.result', compact('calculate_results', 'sum_each', 'difference'));
    }
}
