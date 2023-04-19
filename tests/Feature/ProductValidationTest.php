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


  public function test_product_not_validation_rules()
  {
    $response = $this->post('/products', [
      'title' => '',
      'description' => '',
      'price' => 10,
      'quantity' => 0,
      'sku' => 0,
      'width' => -1,
      'length_value' => -1,
      'category_id' => 0,
      'primary_color_id' => 0,
      'secondary_color_id' => 0,
      'home_style_id' => 0,
      'image' => UploadedFile::fake()->image('avatar.jpg', 2000)
    ]);

    $response->assertSessionHasErrors([
      'title' => 'The title field is required.',
      'description' => 'The description field is required.',
      'price' => 'The price must be at least 50.',
      'quantity' => 'The quantity must be at least 1.',
      'sku' => 'The SKU must be at least 1.',
      'width' => 'The width must be at least 0.',
      'length_value' => 'The length value must be at least 0.',
      'category_id' => 'The selected category does not exist.',
      'primary_color_id' => 'The selected primary color does not exist.',
      'secondary_color_id' => 'The selected secondary color does not exist.',
      'home_style_id' => 'The selected home style does not exist.',
    ]);
  }
}
