<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Yahoo extends Model
{
    use HasFactory;
    public $timestamp = false;//for not including the time stamp
}
