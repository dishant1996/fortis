<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class documents extends Model
{
    use HasFactory;
    protected $table = 'documents';
    protected $primaryKey = 'doc_id';
    protected $fillable = [
        'doc_id',
        'DocName',
        'mod_id',
        'mod_name',
        'slug',
        'links',
        'isActive',
    ];
}
