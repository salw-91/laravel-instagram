<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContestRegistrsationTest extends TestCase
{
    use RefreshDatabase;

    public function an_email_can_be_entered_into_the_contest()
    {
        $this->withoutExceptionHandling();
        
        $this->post('/contest',[
            'email' => 'abc@abc.com',
        ]);

        $this->assertDatabaseCount('contest_entries', 1);
    }
}
