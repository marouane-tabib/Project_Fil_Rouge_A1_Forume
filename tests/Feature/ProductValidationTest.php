<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Tests\TestCase;

class ProductValidationTest extends TestCase
{
  public function test_product_validation_rules()
  {
    $response = $this->post('/products', [
      'title' => 'Test Product',
      'description' => 'This is a test product',
      'price' => 25,
      'quantity' => 10,
      'sku' => 123,
      'width' => 5,
      'length_value' => 10,
      'category_id' => 1,
      'primary_color_id' => 1,
      'secondary_color_id' => 2,
      'home_style_id' => 1,
    ]);

    $response->assertRedirect('/products')->assertSessionHasNoErrors();
  }
}
