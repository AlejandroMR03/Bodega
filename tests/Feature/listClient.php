<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class listClient extends TestCase
{
    /** @test*/
    use RefreshDatabase;
    public function listClient()
    {
        $data = ['name' => 'Catalina'];
        $response = $this->post('/Cliente/create',$data);

        $response
            ->assertStatus(201)
            ->assertJson(['created' => true])
            ->assertDatabaseHas('Cliente', $data);
    }
}
