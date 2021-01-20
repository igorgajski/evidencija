<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
        
        ];

    public function users() { return $this->hasMany(User::class); }
}
