<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class JobApplicationTest extends TestCase
{
    public function test_submit_job_application(): void
    {
        $application = [
            "fullname" => "Mohamad Omar",
            "email" => "mohamadOmar@gmail.com",
            "message" => "Interested in becoming a web developer at Pixl8"
        ];

        $response = $this->postJson('/api/v1/submit_job_application', $application);
        $response->assertStatus(200);
    }

    public function test_submit_job_application_without_required_fields(): void
    {
        $application = [
            "email" => "mohamadOmar@gmail.com",
            "message" => "Interested in becoming a web developer at Pixl8"
        ];

        $response = $this->postJson('/api/v1/submit_job_application', $application);
        $response->assertStatus(422);
    }
}
