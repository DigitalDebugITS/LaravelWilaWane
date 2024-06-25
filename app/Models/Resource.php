<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    use HasFactory;

    // Specify the table if it doesn't follow Laravel's naming convention
    protected $table = 'resources';

    // Specify the fillable attributes
    protected $fillable = [
        'title', 'price', 'description', 'url', 'image', 'category'
    ];
}
