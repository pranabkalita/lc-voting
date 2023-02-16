<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GravatarTest extends TestCase
{
    use RefreshDatabase;

    function test_can_generate_gravatar_image_when_no_email_found_first_character_a()
    {
        $user = User::factory()->create([
            'name' => 'Pranab',
            'email' => 'afakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals('https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-1.png', $gravatarUrl);

        $response = Http::get($user->getAvatar());
        $this->assertTrue($response->successful());
    }

    function test_can_generate_gravatar_image_when_no_email_found_first_character_z()
    {
        $user = User::factory()->create([
            'name' => 'Pranab',
            'email' => 'zfakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals('https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-26.png', $gravatarUrl);

        $response = Http::get($user->getAvatar());
        $this->assertTrue($response->successful());
    }

    function test_can_generate_gravatar_image_when_no_email_found_first_character_0()
    {
        $user = User::factory()->create([
            'name' => 'Pranab',
            'email' => '0fakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals('https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-27.png', $gravatarUrl);

        $response = Http::get($user->getAvatar());
        $this->assertTrue($response->successful());
    }

    function test_can_generate_gravatar_image_when_no_email_found_first_character_9()
    {
        $user = User::factory()->create([
            'name' => 'Pranab',
            'email' => '9fakeemail@fakeemail.com',
        ]);

        $gravatarUrl = $user->getAvatar();

        $this->assertEquals('https://www.gravatar.com/avatar/' . md5($user->email) . '?s=200&d=https://s3.amazonaws.com/laracasts/images/forum/avatars/default-avatar-36.png', $gravatarUrl);

        $response = Http::get($user->getAvatar());
        $this->assertTrue($response->successful());
    }
}
