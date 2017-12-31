<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    protected $fillable = [
        'name', 'email', 'company', 'phone', 'notes', 'ip'
    ];
}