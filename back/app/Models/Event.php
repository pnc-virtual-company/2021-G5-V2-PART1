<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'body', 'city', 'link_join', 'start_at', 'start_date', 'image', 'end_at', 'end_date'];
    protected $hidden = ['created_at', 'updated_at', 'user_id','category_id'];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }

}
