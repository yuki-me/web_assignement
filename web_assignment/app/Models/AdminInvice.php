<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminInvice extends Model
{
    use HasFactory;
    protected $invice = ['cmd', 'id', 'customer', 'date', 'staff', 'amount', 'status'];
}
