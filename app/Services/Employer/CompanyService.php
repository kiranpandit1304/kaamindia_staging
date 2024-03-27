<?php

namespace App\Services\Employer;

use App\Exceptions\DatabaseException;
use App\Exceptions\GlobalException;
use App\Models\Company;
use App\Models\CompanyAddress;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PDOException;

class CompanyService
{
    /**
     * manipulateInput
     *
     * @param  mixed  $request
     * @return void
     */
    public static function store($request, $id = 'null')
    {
        try {
            $userId = Auth::id();
            if ($request->form_type != 'company_create') {
                // company logo
                $logoImagee = $request->file('logo');
                if ($logoImagee) {
                    $logo = $logoImagee->getClientOriginalName();
                    $logoImagee->move(storage_path('app/public/assets/photo/company'), $logo);
                } else {
                    $logo  = $request->old_logo;
                }

                // company gallery
                $images = $request->file('gallery');
                if ($images) {
                    foreach ($images as $key => $image) {
                        $gallery = $image->getClientOriginalName();
                        $image->move(storage_path('app/public/assets/photo/company'), $gallery);
                        $allGallery[] = $gallery;
                    }
                    $galleryimages = json_encode($allGallery);
                } else {
                    $galleryimages  = $request->old_gallery;
                }
                // social links json
                $link = ['facebook' => $request->facebook_link, 'twitter' => $request->twitter_link, 'linkdin' => $request->linkdin_link];
                $socialLink = json_encode($link);
            }
            $inputArray = [
                'user_id' => $userId,
                'name' => $request->name,
                'email' => $request->email,
            ];
            if ($request->form_type != 'company_create') {
                $inputArray = [
                    'about' => $request->about,
                    'name' => $request->name,
                    'email_verified_at' => $request->email_verified_at,
                    'phone_number' => $request->phone_number,
                    'landline_number' => $request->landline_number,
                    'website' => $request->website,
                    'social_links' => $socialLink,
                    'established_at' => date("Y-m-d", strtotime($request->established_at)),
                    'company_size' => $request->company_size,
                    'gst_number' => $request->gst_number,
                    'logo' => $logo,
                    'gallery' => $galleryimages,
                ];
            }
            $companyId = Company::updateOrCreate(
                [
                    'id' => $id,
                ],
                $inputArray,
            )->id;

            if ($request->form_type != 'company_create') {
                CompanyAddress::updateOrCreate(
                    [
                        'company_id' => $companyId,
                    ],
                    [
                        'company_id' => $companyId,
                        'full_address' => $request->full_address,
                        'country_id' => '1',
                        'state_id' => $request->state_id,
                        'city_id' => $request->city_id,
                    ]
                );
            }
            // save industry in companyindustry table
            if ($request->form_type != 'company_create') {
                $company = Company::findOrFail($companyId);
                $company->industries()->sync(explode(',', $request->industry));
            }
        } catch (PDOException $e) {
            DB::rollBack();
            throw new DatabaseException($e->getMessage());
        } catch (Exception $e) {
            DB::rollBack();
            throw new GlobalException($e->getMessage());
        }
    }
}
