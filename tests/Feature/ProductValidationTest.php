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
      'image' => 'testImage',
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

    $response->assertStatus(202);
  }


  public function test_product_not_validation_rules()
  {
    $response = $this->post('/products', [
      'title' => null,
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
      'image' => null
    ]);

  //   $response->assertSessionHasErrors([
  //     // 'image' => 'Please upload an image for your product.|The uploaded file must be an image.|The image size must be between 10 KB and 2 MB.|The image must be in JPEG, PNG, or JPG format.',
  //     'title' => 'Please enter a title for your product.',
  //     'price' => 'Please enter a price for your product.|The price must be a numeric value.|The price must be at least 50.',
  //     'quantity' => 'Please enter a quantity for your product.|The quantity must be a numeric value.|The quantity must be at least 1.',
  //     'sku' => 'Please enter a SKU for your product.|The SKU must be a numeric value.|The SKU must be at least 1.',
  //     'width' => 'Please enter a width for your product.|The width must be a numeric value.|The width must be at least 0.',
  //     'length_value' => 'Please enter a length value for your product.|The length value must be a numeric value.|The length value must be at least 0.',
  //     'category_id' => 'Please select a category for your product.|The category must be a numeric value.|The selected category does not exist.',
  //     'primary_color_id' => 'Please select a primary color for your product.|The primary color must be a numeric value.|The selected primary color does not exist.',
  //     'secondary_color_id' => 'Please select a secondary color for your product.|The secondary color must be a numeric value.|The selected secondary color does not exist.',
  //     'home_style_id' => 'Please select a home style for your product.|The home style must be a numeric value.|The selected home style does not exist.',
  //     'description' => 'Please enter a description for your product.|The description must be a string.|The description must be at least 10 characters long.|The description must not exceed 5000 characters.'
  // ]);
  }
}
