<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JobRequest;
use App\Services\Employer\JobService;
use App\Models\JobRole;
use App\Models\Job;
use App\Models\State;
use App\Models\City;
use App\Models\Perk;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    public $jobservice;

    function __construct()
    {
        $this->jobservice = new JobService();
    }
    /**
     * @index
     *
     * @return void
     */
    public function index()
    {

        // $jobs = Job::with('skills', 'jobRequirements', 'role')->whereJsonContains('city', ['name' => 'Lucknow'])->get();
        $user = Auth::user();
        $jobs = Job::where('company_id', $user->company->id)->get();
        $roles = JobRole::select('id', 'name')->get();
        $states = State::where('country_id', 1)->get();
        $perks = Perk::select('id', 'name')->get();
        $skills = Skill::select('id', 'name')->get();
        return view('employer.job.index', compact('jobs', 'roles', 'states', 'perks', 'skills'));
    }

    /**
     * @create
     *
     * @return void
     */
    public function create()
    {
        $roles = JobRole::select('id', 'name')->get();
        $states = State::where('country_id', 1)->get();
        $perks = Perk::select('id', 'name')->get();
        $skills = Skill::select('id', 'name')->get();
        return view('employer.job.create', compact('roles', 'states', 'perks', 'skills'));
    }

    /**
     * @store
     *
     * @param  mixed $request
     * @return void
     */
    public function store(JobRequest $request)
    {
        $this->jobservice->store($request);
        return redirect()->route('employer.job.index')->with('success', 'Job Add SuccessFull !');
    }

    public function edit(Job $job)
    {
        $user = auth()->user();
        $roles = JobRole::select('id', 'name')->get();
        $states = State::where('country_id', 1)->get();
        $perks = Perk::select('id', 'name')->get();
        $skills = Skill::select('id', 'name')->get();
        return view('employer.job.edit', compact('job', 'user', 'roles', 'states', 'perks', 'skills'));
    }

    /**
     * @update
     *
     * @param  mixed $request
     * @param  mixed $job
     * @return void
     */
    public function update(JobRequest $request, Job $job)
    {
        $this->jobservice->update($request, $job);
        return redirect()->route('employer.job.index')->with('success', 'Job Update SuccessFull !');
    }

    /**
     * @show
     *
     * @return void
     */
    public function show(Job $job)
    {
        $user = Auth::user();
        return view('employer.job.show', compact('job', 'user'));
    }

    /**
     * @delete
     *
     * @param  mixed $job
     * @return void
     */
    public function delete(Job $job)
    {
        $jobDeleted = Job::Where("id", $job->id)->Delete();
        //check if plan is deleted or not
        if ($jobDeleted) {
            return redirect()->back()->with('success', 'Job deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Oops Somethings Went Worng.');
        }
    }

    /**
     * @jopApplications
     *
     * @return void
     */
    public function jopApplications()
    {
        return view('employer.job.job_applications');
    }

    public function employerJobFilter(Request $request)
    {
        $user = Auth::user();
        $query = Job::where('company_id', $user->company->id);

        if ($request->job_role) {
            $query = $query->where('role', $request->job_role);
        }
        if ($request->state) {
            $query =  $query->whereJsonContains('locations', ['state' => $request->state]);
        }
        if ($request->city) {
            $query =  $query->whereJsonContains('locations', ['city' => $request->city]);
        }
        if ($request->working_type) {
            $query = $query->where('job_working_type', $request->working_type);
        }
        $jobs = $query->orderby('id', 'desc')->get();
        $roles = JobRole::select('id', 'name')->get();
        $states = State::where('country_id', 1)->get();
        $perks = Perk::select('id', 'name')->get();
        $skills = Skill::select('id', 'name')->get();
        return view('employer.job.index', compact('jobs', 'roles', 'states', 'perks', 'skills'));
    }
}
