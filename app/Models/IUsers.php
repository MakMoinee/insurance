<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IUsers extends Model
{
    use HasFactory;

    protected $table = 'iusers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
        'userType',
    ];
}
