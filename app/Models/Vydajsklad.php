<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vydajsklad extends Model
{
    use HasFactory;
    
    protected $table = 'vydajsklads';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
