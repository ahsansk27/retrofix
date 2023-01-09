<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;
use App\Models\User;

class UserService extends Model
{
    public $table = 'user_services';
    use HasFactory;
    protected $fillable = [
        'user_id', 'service_id', 'price',
    ];

    public function services()
    {
        return $this->belongsTo(Service::class,'service_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class,'user_id', 'id');
    }

}
