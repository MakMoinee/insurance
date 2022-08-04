<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $primaryKey = 'memberID';

    protected $fillable = [
        'firstName',
        'middleName',
        'lastName',
        'address',
        'contactNum',
        'birthDate',
        'birthPlace',
        'gender',
        'civilStat',
        'height',
        'weight',
        'religion',
        'dep1',
        'dep2',
        'dep3',
        'dep4',
        'dep5',
        'dep6',
        'dep7',
        'dep8',
        'dep9',
        'dep10',
    ];
}
