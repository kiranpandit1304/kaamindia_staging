<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class LogOutController extends Controller
{
    // Logout
    public function logout()
    {
        Session::forget('company_name', 'company_emai');
        Auth::logout();
        Auth::guard('jobseeker')->logout();
        return redirect('/');
    }
}
