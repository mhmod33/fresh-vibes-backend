<?php

namespace Tests\Feature;

use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class ProductImageTest extends TestCase
{
    public function test_it_serves_product_images_from_the_public_disk(): void
    {
        Storage::fake('public');
        Storage::disk('public')->put('products/product.jpg', 'image contents');

        $this->get('/storage/products/product.jpg')
            ->assertOk()
            ->assertStreamedContent('image contents');
    }
}