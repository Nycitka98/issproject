<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zoskladudovyroby extends Model
{
    use HasFactory;

    protected $table = 'zoskladudovyrobies';
    
    public $primaryKey = 'id';
    
    public $timestamps = true;
}
