<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Updateschedule extends Model
{
    use HasFactory;

    protected $table = 'updateschedules';

    protected $fillable = [
        'days',
        'from',
        'to',
        'updated at',
        'created at',
    ];
}