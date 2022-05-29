<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * SalesRepresentative
 *
 * php version 8
 *
 * @category Model
 * @author supunwusl2@gmail.com
 *
 * */

class SalesRepresentative extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'address',
        'mobile',
        'manager_comment',
        'joined_date',
        'current_route',
    ];
}
