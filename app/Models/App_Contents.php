<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class App_Contents extends Model
{
    use HasFactory;
    protected $table = 'appcontents';
    protected $fillable = [
        'title',
        'products_numbers',
        'projects_numbers',
        'employees_numbers',
        'branches_numbers',
        'working_hours',
        'mobile_1',
        'mobile_2',
        'email',
        'address_1',
        'address_2',
        'address_3',
    ];
}
