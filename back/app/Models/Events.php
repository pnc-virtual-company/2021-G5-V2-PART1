<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'categories_id','title', 'body', 'city', 'link_join', 'start_at', 'start_date', 'image', 'end_at', 'end_date'];
    protected $hidden = ['created_at', 'updated_at', 'user_id','categories_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function categories(){
        return $this->belongsTo(Categories::class);
    }
    public function joins(){
        return $this->hasMany(Joins::class);
    }

}
