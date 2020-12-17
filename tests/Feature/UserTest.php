<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    
    protected $seed = true;
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDeleteMethod()
    {
        $response = $this->call('DELETE', '/users/2', ['_token' => csrf_token()]);

        $this->assertEquals(302, $response->getStatusCode());
        $response->assertRedirect('/users');
        $this->assertDatabaseMissing('users', ['id' => 2]);
    }
    
    public function testNotDeleteMethod()
    {
        $response = $this->call('DELETE', '/users/1', ['_token' => csrf_token()]);

        $this->assertEquals(302, $response->getStatusCode());
        $response->assertRedirect('/users');
        $this->assertDatabaseHas('users', ['id' => 1]);
    }
    
}
