<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'event_date', 'time', 'location', 'sport', 'age_group', 'image', 'description'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'event_user');
    }

    public function registrations()
    {
        return $this->hasMany(EventUser::class);
    }


}