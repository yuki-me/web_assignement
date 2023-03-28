<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeMain extends Model
{
    use HasFactory;
    protected $home = ['cmd', 'id', 'pid', 'cid', 'qty', 'price', 'user', 'amount', 'status', ];
}
