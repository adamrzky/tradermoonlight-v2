<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'detail', 'desc1', 'desc2', 'desc3', 'durasi', 'created_at', 'updated_at', 'variant', 'desc4', 'desc5', 'judul_desc1', 'judul_desc2', 'judul_desc3', 'judul_desc4', 'judul_desc5'];
}
