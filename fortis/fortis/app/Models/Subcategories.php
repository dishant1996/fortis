<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcategories extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'sub_name',
        'mod_id',
        'mod_name',
        'DocName',
    ];
    
}
