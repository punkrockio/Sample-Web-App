<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Auth;

class AuthController extends Controller
{
    /**
     * Login
     *
     * @return Response
     */
    public function postLogin(Request $request)
    {
        
        $json = [
            'success' => 1
        ];
        return response()->json($json);
    }

    /**
     * Login
     *
     * @return Response
     */
    public function postRegister(Request $request)
    {
        
        $json = [
            'success' => 1
        ];
        return response()->json($json);
    }

}
