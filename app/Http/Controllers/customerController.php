<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class customerController extends Controller
{
    public function submitCon(Request $request){
        DB::statement("INSERT INTO `connection` (`connection_id`, `customer_id`, `catagory`, `connection_address`) VALUES (?,?,?,?);",[
            1,
            $request['customer_id'],
            $request['catagory'],
            $request['con_address']
        ]);
        return "done!!";
    }
}
