<?php

namespace App\Http\Controllers\Jobseeker;

use App\Http\Controllers\Controller;
// use App\Http\Middleware\Jobseeker;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\Jobseeker;
use App\Models\Qualification;
use App\Models\Skill;
use App\Models\State;
use App\Models\City;
use App\Models\Job;
use App\Services\Jobseeker\JobseekerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class JobseekerController extends Controller
{
    public $jobseekerService;

    public function __construct()
    {
        $this->jobseekerService = new JobseekerService();
    }

    /**
     * @index
     *
     *  get jobseeker profile
     *
     * @return void
     */
    public function index()
    {
        $auth_id = Auth::guard("jobseeker")->user()->id;
        $jobseeker = Auth::guard("jobseeker")->user();
        $skills = Skill::select('id', 'name')->get();
        $states = State::select('id', 'name')->get();
        $cities = City::select('id', 'name')->where('state_id', $jobseeker->state)->get();
        $qualifications = Qualification::select('id', 'name')->get();
        return view('jobseeker.profile.index', compact('jobseeker', 'skills', 'states', 'qualifications', 'cities','auth_id'));
    }
    /**
     * @update
     *
     *  Jobseeker Update
     *
     * @param  mixed  $request
     * @param  mixed  $user
     * @return void
     */
    public function update(Request $request, User $user)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            // 'middle_name' => 'required',
            // 'last_name' => 'required',
            // 'email' => 'required',
            // 'experience_type' => 'required',
            // 'exp_years' => 'required',
            // 'exp_month' => 'required',
            // 'salary_type' => 'required',
            // 'salary_amount' => 'required',
            'state' => 'required',
            'city' => 'required',
            // 'availability' => 'required',
        ]);
        if ($validator->fails()) {
            echo json_encode(['success' => false, 'message' => $validator->errors()->all()]);
        }
        dd('sdasdsa');
        
        $id = $user->id;
        $this->jobseekerService->updateOrCreate($request, $id);
        echo json_encode(['success' => true, 'message' =>'User update successfull']);
        // return redirect()->back()->with('success', 'User update successfull');
    }

    public function updateProfilePic(Request $request, User $user)
    {
        $id = $user->id;
        $this->jobseekerService->updateProfilePic($request, $id);
        echo json_encode(['success' => true, 'message' =>'Profile picture updated successfully']);
    }

    /**
     * @show
     *
     *  show profile details
     * @return void
     */
    public function show($id)
    {
        $jobseeker = Jobseeker::where('id', $id)->get();
        return view('jobseeker.profile.show', compact('jobseeker'));
    }

    /**
     * @changePassword
     *
     * @return void
     */
    public function changePassword()
    {
        return view('jobseeker.changepassword.change_password');
    }

    /**
     * @changePasswordSubmit
     *
     * Change Password
     *
     * @param  mixed  $request
     * @return void
     */
    public function changePasswordSubmit(Request $request)
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required',
        ]);
        $user = Auth::guard("jobseeker")->user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');
    }


    public function appliedJob()
    {
        $jobs = Job::with('role', 'company')->paginate(4);
        return view('jobseeker.applied_job.applied_job', compact('jobs'));
    }

    public function saveJob()
    {
        $jobs = Job::with('role', 'company')->paginate(4);
        return view('jobseeker.savedjob.save_job', compact('jobs'));
    }

    /**
     * @filterCity
     *
     * @param  mixed $request
     * @return void
     */
    public function filterCity(Request $request)
    {
        $cityOption = '';
        $cities = City::where('state_id', $request->state_id)->get();
        foreach ($cities as $city) {
            $cityOption .= '<option value="' . $city->id . '">' . $city->name . '</option>';
        }
        return response()->json($cityOption);
    }

    public function saveResume(Request $request, User $user)
    {
        $id = Auth::guard("jobseeker")->user()->id;
        $jobseeker = $this->jobseekerService->updateOrCreate($request, $id);
        return json_encode(['success' => 1, 'message' => 'Resume uploaded successfully','jobseeker'=>$jobseeker]);
    }

    public function loadBasicDetailsModal()
    {
        $id = $auth_id = Auth::guard("jobseeker")->user()->id;
        $jobseeker =Jobseeker::where('id', $id)->first();
        return  json_encode(array('success' => true, 'jobseeker'=>$jobseeker));
    }

    public function deleteResume()
    {
        $id = Auth::guard("jobseeker")->user()->id;
        $this->jobseekerService->deleteResume($id);
        echo json_encode(['success' => true, 'message' =>'Profile picture updated successfully']);
    }
}
