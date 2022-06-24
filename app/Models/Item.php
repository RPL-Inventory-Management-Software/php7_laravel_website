<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $table = 'items';

    protected $guarded = ['id'];

    //Relationship , read it from items models first
    public function user()
    {
        return $this->belongsTo(User::class);
        // 1 Item only belongs to 1 user
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
