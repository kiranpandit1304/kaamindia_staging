<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\GlobalException;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Services\AuthorizationService;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * index
     *
     * @return void
     */
    public function index()
    {
        return view('auth.register');
    }

    /**
     * store
     *
     * @param  mixed  $request
     * @return void
     *
     * @throws GlobalException
     */
    public function store(UserRequest $request)
    {
        AuthorizationService::store($request);
        $userDetail = ['mobile_number' => $request->mobile_number, 'otp_type' => $request->otp_type, 'userRole' => $request->role];
        return response()->json(['status' => 200, 'userDetail' => $userDetail], 200);
    }
}
