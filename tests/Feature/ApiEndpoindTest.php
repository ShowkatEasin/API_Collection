<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiEndpoindTest extends TestCase
{
    public function it_list_down_all_users()
    {
        User::factory()->create();

        $response = $this->get( uri: '/api/users');

        $response->assertStatus(status: 200);

        $response->assertJson([

            [
                'name' => 'osman',
                'email' => 'osman@gnail.com',
            ]

        ]);
 
    }
    public function it_shows_details_of_a_user_to_authenticated_user (){

    }
    public function It_doesnot_allow_to_access_publicly (){

    }
    public function it_return_404_if_no_record_found_with_the_given_id (){

    }
}
