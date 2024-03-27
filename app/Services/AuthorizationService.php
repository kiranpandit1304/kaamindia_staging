<?php

namespace App\Services;

use App\Exceptions\DatabaseException;
use App\Exceptions\GlobalException;
use Illuminate\Support\Facades\DB;
use App\Mail\UserRegister;
use App\Services\Employer\EmployerService;
use App\Services\Jobseeker\JobseekerService;
use Exception;
use Illuminate\Support\Facades\Mail;

class AuthorizationService
{
    /**
     * @manipulateInput
     *
     * @param  mixed  $request
     * @return void
     *
     * @throws GlobalException
     */
    public static function store($request)
    {
        try {
            if ($request->role == 'employer') {
                EmployerService::updateOrCreate($request);
            }
            if ($request->role == 'jobseeker') {
                JobseekerService::updateOrCreate($request);
            }

            // send OTP & save OTP in DB
            OtpService::sendOtp($request);
            // verification email send
            // $data = $request->all();
            // Mail::to($request->email)->send(new UserRegister($data));
        } catch (\PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (\Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }
}
