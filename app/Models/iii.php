<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoundItem extends Model
{
    use HasFactory;

    // Nama tabel (sebenarnya opsional kalau nama model = singular dari nama tabel)
    protected $table = 'found_items';

    // Kolom yang boleh diisi (mass assignable)
    protected $fillable = [
        'item_name',
        'description',
        'location_found',
        'date_found',
        'photo_path',
        'user_id',
    ];

    // Relasi ke User (pelapor)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
