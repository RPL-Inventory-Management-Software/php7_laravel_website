<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    //Relationship , read it from project models first
    public function user()
    {
        return $this->belongsTo(User::class);
        //1 projects only belongs to 1 user
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
