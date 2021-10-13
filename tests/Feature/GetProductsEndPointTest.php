<?php

namespace Tests\Feature;

use Database\Factories\ProductFactory;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Spectator\Spectator;
use Tests\TestCase;

class GetProductsEndPointTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_get_products()
    {
        ProductFactory::new()->count(5)->create();

        $this->get('/api/v1/products')
            ->assertSuccessful()
            ->assertJsonStructure([
                "data" => [
                    [
                        "sku",
                        "name",
                        "price",
                        "tax_rate",
                        "taxed_price",
                    ],
                ],
            ]);
    }

    public function test_can_get_products_using_api_spec()
    {
        Spectator::using('api_v1.json');

        ProductFactory::new()->count(5)->create();

        $this->get('/api/v1/products')->assertValidResponse(200);
    }
}
