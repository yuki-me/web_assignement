<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminProductShop extends Model
{
    use HasFactory;
    protected $productshop = ['cmd', 'id', 'productcode', 'displayspace', 'qty', 'cost', 'saleprice', 'amount', 'statuspromotion', 'statusproduct', 'imagename', 'imagepath', 'imagesize', 'myfile'];
}
