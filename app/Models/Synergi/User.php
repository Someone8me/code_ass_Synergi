<?php

namespace App\Models\Synergi;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $table = 'synergi_users';
    protected $primaryKey = 'id';
    protected $fillable = [
        'username',
        'email',
        'comments'
    ];
}
