<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebPersonalData extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'WebPersonalData';
    protected $primarykey = 'id';
}
