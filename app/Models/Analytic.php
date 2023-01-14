<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Analytic extends Model
{
    protected $fillable = ['post_id', 'view_count'];
    use HasFactory;
}
