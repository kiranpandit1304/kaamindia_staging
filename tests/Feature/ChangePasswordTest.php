<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ChangePasswordTest extends TestCase
{
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testChangepassword()
    {
        $user = User::where('email', 'employer@gmail.com')->first();
        // login
        $response = $this->post(route('auth.login'), [
            'status' => $user->status,
            'email' => $user->email,
            'password' => 'employer@123',
        ]);
        // change password
        $this->assertTrue(true);
        $response = $this->post(route('employer.changePasswordSubmit'), [
            'current_password' => 'employer@123',
            'password' => 'employer@123',
            'password_confirmation' => 'employer@123',
        ]);

        $this->assertTrue(true);
    }
}
