<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thecoderblog extends Model
{
    use HasFactory;
    protected $table = 'artigos';
    protected $fillable = ['_token'];
}