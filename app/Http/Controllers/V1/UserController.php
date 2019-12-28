<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Validator;


class UserController extends Controller
{
    public function register(Request $request)
   		{
	        $validator = Validator::make($request->all(), [
	            'name' => 'required',
	            'email' => 'required|email|unique:users',
	            'password' => 'required',
	            'c_password' => 'required|same:password',
	        ]);

	        if ($validator->fails()) {
	            $response = [
	                'success' => false,
	                'data' => 'Validation Error.',
	                'message' => $validator->errors(),
	            ];
	            return response()->json($response, 404);
	        }

	        $input = $request->all();
	        $input['password'] = bcrypt($input['password']);
	        $user = User::create($input);
	        $success['token'] = $user->createToken('crmApp')->accessToken;
	        $success['name'] = $user->name;

	        $response = [
	            'success' => true,
	            'data' => $success,
	            'message' => 'User register successfully.'
	        ];

        return response()->json($response, 200);
    }

    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::attempt(['email' => request('email'), 'password' => request('password')])) {
            $user = Auth::user();
            $success['token'] = $user->createToken('crmApp')->accessToken;

            return response()->json(['User Logined successfully' => $success], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

}
