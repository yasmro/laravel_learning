<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Viewを使うときはこれ必須．
use Illuminate\Support\Facades\View;

class MathController extends Controller
{
    public function sum($x, $y){
        $sum = $x + $y;
        // ControllerからViewを生成
        return View::make('sum', ['x'=>$x, 'y'=>$y, 'sum'=>$sum]);
    }
}
