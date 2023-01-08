<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RegistrationTest extends TestCase
{
    
    public function test_registration_page_can_be_rendered()
    {
        $this->get('register')->assertStatus(200);
    }

    public function test_anyone_can_regist()
    {
        $user = User::factory()->make();
        $response = $this->post('register', $user->toArray());
        $this ->asserAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }


}
