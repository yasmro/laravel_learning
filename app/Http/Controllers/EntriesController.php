<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Entry;

class EntriesController extends Controller
{
    public function index(){
        $entries = Entry::all();
        //変数の中身をただ見る．
        foreach($entries as $entry){
            var_dump($entry->title);
        }
    }
}
