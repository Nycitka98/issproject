<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medzisklad extends Model
{
    use HasFactory;

    protected $table = 'medzisklads';
    
    public $primaryKey = 'id1';
    
    public $timestamps = true;
}
