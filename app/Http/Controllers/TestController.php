<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test(){
        $users=DB::select('select "NRO_OMI" from TBL_VIAJE V order by desc limit 1');
        var_dump($users);
    }
}
