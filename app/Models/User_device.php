<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User_device extends Model
{
       use HasFactory;

    protected $fillable = [
        'assigned_at',
        'returned_at'
        
        
        
        ];

    public function user() { return $this->belongsTo(User::class); }
    public function device() { return $this->belongsTo(Device::class); }
}
