<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userphn extends Model
{
    use HasFactory;
    protected $table = 'userphns';
    protected $fillable = ['name', 'email'];
}
