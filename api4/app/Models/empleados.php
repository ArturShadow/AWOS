<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleados extends Model
{
    public $timestamp = false;
    protected $fillable = ['id','nombreEmpleado', 'noEmpleado'];
}
