<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $companies = [
            [
                'user_id' => '1',
                'name' => 'Xeam',
                'about' => 'Information technology',
                'email' => 'xeam@gmail.com',
                'email_verified_at' => '2022-05-23 00:00:00',
                'phone_number' => '8754321299',
                'landline_number' => '85211',
                'website' => 'https://www.xeamventures.com/',
                'social_links' => '{"facebook":"facebookgoogle","instagram":"instagramgoogle","linkdian":"linkdiangoogle"}',
                'established_at' => '2022-05-23 00:00:00',
                'company_size' => '12',
                'gst_number' => 'GSTIN001',
                'logo' => 'xeam.png',
                'gallery' => '{"xeam.jp", "logo.jp", "banner.jp"}',
                'status' => 'active',
            ],
            [
                'user_id' => '2',
                'name' => 'Insta',
                'about' => 'Information technology',
                'email' => 'insta@gmail.com',
                'email_verified_at' => '2022-05-23 00:00:00',
                'phone_number' => '8754129090',
                'landline_number' => '78111',
                'website' => 'https://www.instaventures.com/',
                'social_links' => '{"facebook":"facebookgoogle","instagram":"instagramgoogle","linkdian":"linkdiangoogle"}',
                'established_at' => '2022-05-23 00:00:00',
                'company_size' => '12',
                'gst_number' => 'GSTIN001',
                'logo' => 'insta.png',
                'gallery' => '{"insta.jp", "logo.jp", "banner.jp"}',
                'status' => 'active',
            ],
            [
                'user_id' => '3',
                'name' => 'geek',
                'about' => 'Information technology',
                'email' => 'geek@gmail.com',
                'email_verified_at' => '2022-05-23 00:00:00',
                'phone_number' => '87541212',
                'landline_number' => '85211',
                'website' => 'https://www.geekventures.com/',
                'social_links' => '{"facebook":"facebookgoogle","geekgram":"geekgramgoogle","linkdian":"linkdiangoogle"}',
                'established_at' => '2022-05-23 00:00:00',
                'company_size' => '12',
                'gst_number' => 'GSTIN001',
                'logo' => 'xeam.png',
                'gallery' => '{"xeam.jp", "logo.jp", "banner.jp"}',
                'status' => 'active',
            ],
        ];

        foreach ($companies as $company) {
            Company::create(
                $company
            );
        }
    }
}
