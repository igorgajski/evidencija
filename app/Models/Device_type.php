<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Device_type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
        
        
        ];


    public function devices() { return $this->hasMany(Device::class); }
}
