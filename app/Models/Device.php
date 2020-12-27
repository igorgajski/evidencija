<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Device extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'model'
        
        ];

}
