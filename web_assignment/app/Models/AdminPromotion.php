<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPromotion extends Model
{
    use HasFactory;
    protected $purchase = ['cmd', 'id', 'percentage', 'image', 'filename', 'filepath', 'filesize', 'myfile'];
}
