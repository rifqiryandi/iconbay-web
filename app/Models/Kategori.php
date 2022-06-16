<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';

    protected $fillable = ['nama'];

    protected $primaryKey = 'id';

    function gambar()
    {
        return $this->hasMany(Image::class, 'kategori_id', 'id');
    }
}
