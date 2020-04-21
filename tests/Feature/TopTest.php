<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TopTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testTop()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testAccountPage() {
        $response = $this->get('/account');
        $response->assertStatus(200);
    }

    public function testSigninPage() {
        $response = $this->get('/signin');
        $response->assertStatus(200);
    }

    // ToDo:簡単ログイン画面への遷移テスト

}
