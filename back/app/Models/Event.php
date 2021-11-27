<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','title', 'category', 'body', 'city', 'link_join', 'start_at', 'start_date', 'end_at', 'end_date'];
    protected $primaryKey = 'event_id';
}
