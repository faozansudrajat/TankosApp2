<?php

namespace Tests\Feature;

use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AboutTest extends TestCase
{
     /**
     * Tes halaman about dapat dimuat dengan benar untuk konsumen dan produsen.
     *
     * @return void
     */
    public function testAboutPageLoadsCorrectlyForConsumers()
    {
        $user = factory(User::class)->create(['usertype' => 0,'last_name' => 'Doe']);
        $response = $this->actingAs($user)
                         ->get('/about');
        $response->assertStatus(200);
        $response->assertViewIs('konsumen.about');
    }
    
    /**
     * Tes halaman about dapat dimuat dengan benar untuk produsen.
     *
     * @return void
     */
    public function testAboutPageLoadsCorrectlyForProducers()
    {
        $user = factory(User::class)->create(['usertype' => 1,'last_name' => 'Dul']);
    
        $response = $this->actingAs($user)
                         ->get('/about');
    
        $response->assertStatus(200);
        $response->assertViewIs('produsen.about');
    }
}
