<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class BookNow extends Model
{
    public $table = 'book_now';
    use HasFactory;
    protected $fillable = [
        'user_id', 'service_id', 'price',
    ];
    

}
