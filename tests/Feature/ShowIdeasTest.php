<?php

namespace Tests\Feature;

use App\Models\Idea;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ShowIdeasTest extends TestCase
{
    use RefreshDatabase;

    public function test_list_of_ideas_shows_on_main_page()
    {
        $ideaOne = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description of My First Idea'
        ]);

        $ideaTwo = Idea::factory()->create([
            'title' => 'My Second Idea',
            'description' => 'Description of My Second Idea'
        ]);

        $response = $this->get(route('idea.index'));

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertSee($ideaOne->description);

        $response->assertSee($ideaTwo->title);
        $response->assertSee($ideaTwo->description);
    }

    public function test_single_idea_shows_correctly_on_show_page()
    {
        $idea = Idea::factory()->create([
            'title' => 'My First Idea',
            'description' => 'Description of My First Idea'
        ]);

        $response = $this->get(route('idea.show', $idea));

        $response->assertSuccessful();
        $response->assertSee($idea->title);
        $response->assertSee($idea->description);
    }

    public function test_ideas_pagination_works()
    {
        Idea::factory(Idea::PAGINATION_COUNT + 1)->create();

        $ideaOne = Idea::find(1);
        $ideaOne->title = 'My First Idea';
        $ideaOne->save();

        $ideaEleven = Idea::find(11);
        $ideaEleven->title = 'My Eleventh Idea';
        $ideaEleven->save();

        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertSee($ideaOne->title);
        $response->assertDontSee($ideaEleven->title);

        $response = $this->get('/?page=2');

        $response->assertSee($ideaEleven->title);
        $response->assertDontSee($ideaOne->title);
    }

    // public function test_ideas_with_same_title_have_different_slug()
    // {
    //     $ideaOne = Idea::factory()->create([
    //         'title' => 'My First Idea',
    //         'description' => 'Description for my first idea',
    //     ]);

    //     $ideaTwo = Idea::factory()->create([
    //         'title' => 'My First Idea',
    //         'description' => 'Another Description for my first idea',
    //     ]);

    //     $response = $this->get(route('idea.show', $ideaOne));

    //     $response->assertSuccessful();
    //     $this->assertTrue(request()->path() === 'ideas/my-first-idea');

    //     $response = $this->get(route('idea.show', $ideaTwo));

    //     $response->assertSuccessful();
    //     $this->assertTrue(request()->path() === 'ideas/my-first-idea-1');
    // }
}
