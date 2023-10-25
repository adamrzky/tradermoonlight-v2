<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang digunakan oleh model ini.
     *
     * @var string
     */
    protected $table = 'products_type';

    /**
     * Kolom-kolom yang bisa diisi data.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'desc',
        'image',
        // 'created_at', // biasanya ini dan 'updated_at' otomatis terisi, jadi Anda tidak perlu menambahkannya di sini
        // 'updated_at',
    ];

    // Jika Anda tidak memerlukan timestamps (created_at dan updated_at) 
    // Anda bisa disable dengan baris berikut, tetapi tampaknya Anda memerlukannya, jadi baris ini dikomentari
    // public $timestamps = false;
}
