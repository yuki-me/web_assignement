<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminCustomer extends Model
{
    // use HasFactory;
    protected $customer = ['cmd', 
                            'id', 
                            'lastname', 
                            'firstname', 
                            'gender', 
                            'dateofbirth', 
                            'phonenumber', 
                            'email',
                            'jobtitle', 
                            'country', 
                            'province', 
                            'district', 
                            'communes', 
                            'villages', 
                            'street', 
                            'house'];
}
