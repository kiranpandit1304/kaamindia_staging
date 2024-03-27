<?php

namespace App\Services\Employer;

use App\Exceptions\DatabaseException;
use App\Exceptions\GlobalException;
use Exception;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;
use App\Models\Skill;
use App\Models\JobRequirement;
use App\Models\JobAddress;
use Illuminate\Support\Facades\DB;
use PDOException;

class JobService
{
    /**
     * manipulateInput
     *
     * @param  mixed  $request
     * @return void
     */
    public function store($request)
    {
        try {
            $user = Auth::user();
            Job::Create(
                [
                    'company_id' => $user->company->id,
                    'title' => $request->title,
                    'description' => $request->description,
                    'role' => $request->role,
                    'openings' => $request->job_openings,
                    'job_type' => $request->job_type,
                    'salary' => $request->salary,
                    'job_working_type' => $request->job_working_type,
                    'locations' => $request->location,
                    'incentive' => $request->incentive,
                    'interview_type' => $request->interview_type,
                    'perks' => $request->perks,
                    'skills' => $request->skills,
                    'min_qualification' => $request->min_qualification,
                    'gender' => $request->gender,
                    'experience' => $request->experience,
                    'security' => $request->security,
                    'job_expiry_date' => date('Y-m-d', strtotime($request->job_expiry)),
                    'status' => config('constants.status.job_create'),
                ]
            );
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }

    /**
     * @update
     *
     * @param  mixed $request
     * @param  mixed $job
     * @return void
     */
    public function update($request, $job)
    {
        try {
            $user = Auth::user();
            Job::where('id', $job->id)
                ->update(
                    [
                        'company_id' => $user->company->id,
                        'title' => $request->title,
                        'description' => $request->description,
                        'role' => $request->role,
                        'openings' => $request->job_openings,
                        'job_type' => $request->job_type,
                        'salary' => $request->salary,
                        'job_working_type' => $request->job_working_type,
                        'locations' => $request->location,
                        'incentive' => $request->incentive,
                        'interview_type' => $request->interview_type,
                        'perks' => $request->perks,
                        'skills' => $request->skills,
                        'min_qualification' => $request->min_qualification,
                        'gender' => $request->gender,
                        'experience' => $request->experience,
                        'security' => $request->security,
                        'job_expiry_date' => date('Y-m-d', strtotime($request->job_expiry)),
                        'status' => config('constants.status.job_create'),
                    ]
                );
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }
}
