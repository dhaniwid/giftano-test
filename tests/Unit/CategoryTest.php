<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Category;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_category() {
        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->description,
            'status' => $this->faker->status
        ];

        $this->post(route('category.create'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_category() {
        $category = factory(Category::class)->create();

        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->description,
            'status' => $this->faker->status
        ];

        $this->put(route('category.update', $category->id), $data)
            ->assertStatus(200) 
            ->assertJson($data);
    }

    public function test_can_delete_category() {
        $category = factory(Category::class)->create();

        $this->delete(route('category.delete', $category->id), $data)
            ->assertStatus(204);
    }

    public function test_can_list_category() {
        $category = factory(Category::class, 2)->create()->map(function ($category){
            return $category->only(['id', 'name', 'description', 'status']);

            $this->get(route('category'))
                ->assertStatus(200)
                ->assertJson($category->toArray())
                ->assertJsonStructure([
                    '*' => ['id', 'name', 'description', 'status'],
                ]);
        });
    }


}
