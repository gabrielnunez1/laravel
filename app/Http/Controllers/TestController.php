<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class TestController extends Controller
{
    public function test(){
        $conn = oci_connect("mbpc", "P3f3MbPc", "192.168.20.135");
 		echo $conn;
 		 $stdi = oci_parse($conn, "SELECT COUNT(*) FROM TBL_VIAJE");
    echo oci_execute($stdi);
    }
}
