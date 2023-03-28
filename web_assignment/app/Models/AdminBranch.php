<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminBranch extends Model
{
    use HasFactory;
    protected $branch = ['cmd',
                         'id',
                         'branchname',
                         'description',
                         'branchimage',
                         'filename',
                         'filepath',
                         'filesize',
                         'myfile'];
}
