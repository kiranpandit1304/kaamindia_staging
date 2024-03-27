<?php

namespace App\Services\Jobseeker;

use App\Exceptions\DatabaseException;
use App\Exceptions\GlobalException;
use App\Models\Jobseeker;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDOException;

class JobseekerService
{
    /**
     * @jobseekerUpdate
     *  update jobseeker profile
     *
     * @param  mixed  $request
     * @param  mixed  $user
     * @return void
     */
    public static function updateOrCreate($request, $id = null)
    {
        try {
            DB::beginTransaction();
            // upload resume
            $resume = $request->file('resume');
            if ($resume) {
                $resumeName = $resume->getClientOriginalName();
                $resumeName = 'Resume_'.rand(11111, 99999) . time() . '.' . $resume->extension();
                $resume->move(storage_path('app/public/assets/photo/jobseeker'), $resumeName);
            } else {
                $resumeName  = $request->old_resume;
            }

            $inputArray = [
                'full_name' => $request->full_name,
                'mobile_number' => $request->mobile_number,
                'role' => $request->role,
            ];
            if ($request->update == 'update') {
                $jobseeker = Jobseeker::where('id', $id)->first();
                $inputArray = [
                    'first_name' => !empty($request->first_name) ? $request->first_name : $jobseeker->first_name,
                    'middle_name' => !empty($request->middle_name) ? $request->middle_name : $jobseeker->middle_name,
                    'last_name' => !empty($request->last_name) ? $request->last_name : $jobseeker->last_name,
                    'email' => !empty($request->email) ? $request->email : $jobseeker->email,
                    'mobile_number' => !empty($request->mobile_number) ? $request->mobile_number : $jobseeker->mobile_number,
                    'salary' => !empty($request->salary_amount) ? (float)$request->salary_amount : $jobseeker->salary,
                    'salary_type' => !empty($request->salary_type) ? $request->salary_type : $jobseeker->salary_type,
                    'job_profile' => !empty($request->job_profile) ? $request->job_profile : $jobseeker->job_profile,
                    'date_of_birth' => !empty($request->date_of_birth) ? $request->date_of_birth : $jobseeker->date_of_birth,
                    'qualification' => json_encode($request->qualification),
                    'skill' => json_encode($request->skill),
                    'state' => !empty($request->state) ? $request->state : $jobseeker->state,
                    'city' => !empty($request->city) ? $request->city : $jobseeker->city,
                    'experience' => !empty($request->experience) ? $request->experience : $jobseeker->experience,
                    'resume' => $resumeName,
                    'experience_type' => !empty($request->experience_type) ? $request->experience_type : $jobseeker->experience_type,
                    'experience_year' => !empty($request->exp_years) ? $request->exp_years : $jobseeker->experience_year,
                    'experience_month' => !empty($request->exp_month) ? $request->exp_month : $jobseeker->experience_month,
                    'availability' => !empty($request->availability) ? $request->availability : $jobseeker->availability
                ];
            }
            
            $jobseeker = Jobseeker::updateOrCreate(
                [
                    'id' => $id,
                ],
                $inputArray,
            );
            DB::commit();
            return $jobseeker;
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }

    public function updateProfilePic($request, $id = null)
    {
        try {
            DB::beginTransaction();
            // upload profile picture
            $photo = $request->file('photo');
            if ($photo) {
                $photoName = $photo->getClientOriginalName();
                $photoName = 'Profile_'.time().rand(1111,9999).'.'.$request->file('photo')->extension();
                $photo->move(storage_path('app/public/assets/photo/jobseeker'), $photoName);
            } else {
                $jobseeker = Jobseeker::where('id', $id)->first();
                $photoName  = $jobseeker->profile_pic;
            }          

            $inputArray = [
                'profile_pic' => $photoName,
            ];
            Jobseeker::updateOrCreate(
                [
                    'id' => $id,
                ],
                $inputArray,
            );
            DB::commit();
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }
    public function deleteResume($id)
    {
        try {
            DB::beginTransaction();
            $inputArray = [
                'resume' => null,
            ];
            
            Jobseeker::updateOrCreate(
                [
                    'id' => $id,
                ],
                $inputArray,
            );
            DB::commit();
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }
}
