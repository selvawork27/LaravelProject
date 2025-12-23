<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tasks extends Model
{    protected $fillable=['title','description','due_date','is_completed'];
}
