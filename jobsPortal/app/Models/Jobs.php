<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobs extends Model
{

    protected $table = 'jobs';
    protected $fillable = ['user_id', 'title', 'description', 'category_id','company', 'salary','email',
        'published', 'deadline'];

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }
}
