<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function primaryColor(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'primary_color_id', 'id');
    }

    public function secondaryColor(): BelongsTo
    {
        return $this->belongsTo(Color::class, 'secondary_color_id', 'id');
    }
}
