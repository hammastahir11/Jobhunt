<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userinfo extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'userinfo';
    protected $primarykey = 'iD';
}
