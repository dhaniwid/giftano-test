<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_can_create_product() {
        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->description,
            'status' => $this->faker->status,
            'category_id' => $this->faker->category_id
        ];

        $this->post(route('product.create'), $data)
            ->assertStatus(201)
            ->assertJson($data);
    }

    public function test_can_update_product() {
        $product = factory(Product::class)->create();

        $data = [
            'name' => $this->faker->name,
            'description' => $this->faker->description,
            'status' => $this->faker->status,
            'category_id' => $this->faker->category_id
        ];

        $this->put(route('product.update', $product->id), $data)
            ->assertStatus(200) 
            ->assertJson($data);
    }

    public function test_can_delete_product() {
        $product = factory(Product::class)->create();

        $this->delete(route('product.delete', $product->id), $data)
            ->assertStatus(204);
    }

    public function test_can_list_product() {
        $product = factory(Product::class, 2)->create()->map(function ($product){
            return $product->only(['id', 'name', 'description', 'status', 'category_id']);

            $this->get(route('product'))
                ->assertStatus(200)
                ->assertJson($product->toArray())
                ->assertJsonStructure([
                    '*' => ['id', 'name', 'description', 'status', 'category_id'],
                ]);
        });
    }
}
