<?php

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase;
    public function test_store_method()
    {
        $data = ['name' => 'Test Category','id' => 100];

        $response = $this->post(route('categories.store'), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_update_method()
    {
        $category = Category::factory()->create(['name' => 'Old Name']);

        $data = ['name' => 'New Name', 'id' => $category->id];

        $response = $this->put(route('categories.update', $category->id), $data);

        $response->assertRedirect();
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_destroy_method()
    {
        $category = Category::factory()->create();

        $response = $this->delete(route('categories.destroy', $category->id));

        $response->assertRedirect();
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}