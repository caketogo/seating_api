<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'user_id',
        'event_type_id',
    ];

    use HasFactory;


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
