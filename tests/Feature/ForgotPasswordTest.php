<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class ForgotPasswordTest extends TestCase
{
    use WithFaker;
    use WithoutMiddleware;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testForgotPassword()
    {
        $response = $this->get(route('auth.forgetPassword'));

        $response->assertStatus(200);
    }

    public function testCheckForgotPassword()
    {
        // Fgorgot password
        $response = $this->post(route('auth.submitForgetPassword'), [
            'email' => 'employer@gmail.com',
        ]);

        $response->assertStatus(200);
    }
}
