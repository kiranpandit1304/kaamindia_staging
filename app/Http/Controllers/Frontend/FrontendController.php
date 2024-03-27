<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Job;
use App\Models\State;

class FrontendController extends Controller
{
    /**
     * @home
     *
     *  Home page
     * @return void
     */
    public function home()
    {
        $jobs = Job::with('role', 'company')->limit(6)->get();
        $company = Company::with('companyAddress', 'jobs')->get();
        return view('frontend.home', compact('jobs', 'company'));
    }

    /**
     * @jobList
     *
     * @return void
     */
    public function jobList()
    {
        $jobs = Job::with('role', 'company')->paginate(4);
        return view('frontend.job_list', compact('jobs'));
    }


    public function jobDetails(Job $job)
    {
        $user = auth()->user();
        return view('frontend.job_details', compact('user', 'job'));
    }
}
