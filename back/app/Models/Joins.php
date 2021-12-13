<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joins extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", 'events_id'];
    protected $hidden = ["created_at","updated_at"];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function events()
    {
        return $this->belongsTo(Events::class);
    }
}
