<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class tbl_admin extends User
{
    use HasApiTokens,
        HasFactory,
        Notifiable;

    protected $table = 'tbl_admin';

    protected $fillable = [
        'admin_id',
        'admin_name',
        'admin_email',
        'admin_password',
        'admin_phone'
    ];
}
