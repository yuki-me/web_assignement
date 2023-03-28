<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoginSignup extends Model
{
    use HasFactory;
    protected $fillable = [
        'P_CMD',
        'P_ID',
        'P_LastName',
        'P_FirstName',
        'P_Gender',
        'P_DateOfBirth',
        'P_PhoneNumber',
        'P_Email',
        'P_JobTitle',
        'P_Country',
        'P_Province',
        'P_District',
        'P_Commnues',
        'P_Villages',
        'P_Street',
        'P_House',
        'P_Password',
        'user'
    ];
}