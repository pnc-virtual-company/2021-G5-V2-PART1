<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Joins extends Model
{
    use HasFactory;
    protected $fillable = ["user_id", 'events_id'];
    public function user()
    {
        return $this->hasMany(User::class);
    }
    public function events()
    {
        return $this->hasMany(Events::class);
    }
}
