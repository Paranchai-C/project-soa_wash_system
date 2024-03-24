<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //

    public function test(Request $request)
    {
        //$response = Http::post('localhost:8081/employees/add')->json();

        //dd($response);
    }
    function login_post(Request $request) {
        echo $request->Username;
        return view('user.index');
    }
}
?>