<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'password',
        'id_admin',
        'leave_approve',
        'reason',
       'leave_time',
       'duration_leave'

    ];
}
