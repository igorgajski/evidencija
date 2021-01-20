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


    public function users_devices() { return $this->hasMany(User_device::class); }


    public function manufacturer() { return $this->belongsTo(Manufacturer::class); }
    public function device_type() { return $this->belongsTo(Device_type::class); }

}
