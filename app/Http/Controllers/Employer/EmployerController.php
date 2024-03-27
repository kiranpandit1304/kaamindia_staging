<?php

namespace App\Http\Controllers\Employer;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\Employer\EmployerService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    public $employerService;

    public function __construct()
    {
        $this->employerService = new EmployerService();
    }

    /**
     * @index
     *
     *  get employer profile
     *
     * @return void
     */
    public function index()
    {
        $user = Auth::user();

        return view('employer.profile.index', compact('user'));
    }

    /**
     * @update
     *
     *  Employer Update
     *
     * @param  mixed  $request
     * @param  mixed  $user
     * @return void
     */
    public function update(UserRequest $request, User $user)
    {
        $id = $user->id;
        $this->employerService->updateOrCreate($request, $id);

        return redirect()->back()->with('success', 'User update successfull');
    }

    /**
     * @changePassword
     *
     * @return void
     */
    public function changePassword()
    {
        return view('employer.profile.change_password');
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
        $user = Auth::user();
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');
    }
}
