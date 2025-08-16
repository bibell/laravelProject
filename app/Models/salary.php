<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    // Specify the custom table name
    protected $table = 'salary';

    // Define fillable fields
    protected $fillable = [
        'full_name',
        'email',
        'job_title',
        'salary',
        'currency',
        'year_of_experience'
    ];
}