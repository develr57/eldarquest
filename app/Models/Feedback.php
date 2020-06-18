<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];
    protected $fillable = ['id', 'name', 'email', 'phone', 'comment', 'created_at', 'updated_at'];
}
