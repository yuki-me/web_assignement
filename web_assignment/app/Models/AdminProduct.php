<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProduct extends Model
{
    // use HasFactory;
    protected $product = ['cmd', 'id', 'item', 'description', 'category', 'subcategory'];
}
