<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JoinModel extends Model
{
    use HasFactory;
    protected $table = 'usuarios';

    protected $fillable = ['name','email','birthday','telefono','image_url'];
}
