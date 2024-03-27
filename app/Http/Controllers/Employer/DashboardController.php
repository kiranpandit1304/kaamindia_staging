<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Models\Company;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $company = Company::where('user_id', $user->id)->first();
        if ($company) {
            session(['company_name' => $company->name, 'company_email' => $company->email]);
        }
        return view('employer.dashboard', compact('company', 'user'));
    }
}
