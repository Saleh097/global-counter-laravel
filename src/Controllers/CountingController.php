<?php

namespace CountingUtil\Controllers;

use App\Http\Controllers\Controller;
use CountingUtil\GlobalCounter;

class CountingController extends Controller
{

    public function counterStatus(GlobalCounter $counter){
        $counter->increament();
        $counter->increament();

        return view("counter::stats", ['cntValue' => $counter->currentValue()]);
    }

    public function increase(){
        
    }

    public function decrease(){

    }
}