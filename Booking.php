<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruangan;

class Booking extends Model
{
    use HasFactory;
    protected $guarded = [];
    // public function ruangan()
    // {
    //     return $this->hasOne('App\Models\Ruangan', 'id', 'ruangan_id')->withDefault();
    // }

    // public function ruangan()
    // {
    //     return $this->belongsTo(Ruangan::class, 'ruangan_id', 'id');
    // }

    public function ruangan()
    {
        return $this->belongsTo(Ruangan::class)->withDefault([
            'Kode' => 'No'
        ]);
    }
}
