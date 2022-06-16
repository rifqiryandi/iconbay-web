<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'gambar';

    protected $fillable = ['nama', 'filepath', 'kategori_id', 'style_id'];

    function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

    function style()
    {
        return $this->belongsTo(Style::class);
    }

    // protected $casts = [
    //     'nama' => 'array',
    // ];
}
