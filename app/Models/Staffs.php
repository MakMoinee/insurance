<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    use HasFactory;

    protected $table = 'staffs';
    protected $primaryKey = 'staffID';

    protected $fillable = [
        'userID',
        'roledesc',
        'firstname',
        'middlename',
        'lastname',
        'roledesc',
        'address',
        'gender',
        'birthdate',
        'contactNumber',
        'dateHired',
        'isActive'
    ];
}
