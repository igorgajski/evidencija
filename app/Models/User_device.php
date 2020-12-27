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
}
