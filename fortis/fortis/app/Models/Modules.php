<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modules extends Model
{
    use HasFactory;
    protected $table = 'modules';
    protected $primaryKey = 'mod_id';
    protected $fillable = [
        'mod_id',
        'modname',
        'slug',
        'subcategories',
        'isActive',
    ];

    public function documents()
    {
        return $this->hasMany(documents::class);
    }
    public function subcategories()
    {
        return $this->hasMany(Subcategory::class);
    }
}
