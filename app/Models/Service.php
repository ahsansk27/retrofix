<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserService;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'image', 'description',
    ];

    public function user_service()
    {
        return $this->hasMany(UserService::class,'service_id', 'id');
    }

}
