<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;
    
    protected $table = 'users';
    
    protected $fillable = [
        'name',
        'employee_id',
        'job_title',
        'department',
        'business_unit',
        'gender',
        'ethnicity',
        'age',
        'hire_date',
        'anual_salary',
        'bonus',
        'country',
        'city',
        'exit_date'
    ];
}
