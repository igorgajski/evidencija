<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
     use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password'
        
        
        ];

        public function role() { return $this->belongsTo(Role::class); }
        public function country() { return $this->belongsTo(Country::class); }
        public function department() { return $this->belongsTo(Department::class); }



        public function users_devices() { return $this->hasMany(User_device::class); }
}
