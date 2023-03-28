<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminPurchase extends Model
{
    use HasFactory;
    protected $purchase = ['cmd', 'id', 'company', 'date', 'staff', 'amount', 'status'];
}
