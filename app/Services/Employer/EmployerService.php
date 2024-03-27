<?php

namespace App\Services\Employer;

use App\Exceptions\DatabaseException;
use App\Exceptions\GlobalException;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use PDOException;

class EmployerService
{
    /**
     * @employerUpdate
     *  update Employer profile
     *
     * @param  mixed  $request
     * @param  mixed  $user
     * @return void
     */
    public static function updateOrCreate($request, $id = null)
    {
        try {
            DB::beginTransaction();
            $inputArray = [
                'full_name' => $request->full_name,
                'mobile_number' => $request->mobile_number,
                'role' => $request->role,
            ];

            if (isset($request->email) && $request->email != null) {
                $inputArray['email'] = $request->email;
            }
            User::updateOrCreate(
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
