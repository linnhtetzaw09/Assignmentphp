<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'event_date', 
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
