<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        return view('jobseeker.dashboard', compact('user'));
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
