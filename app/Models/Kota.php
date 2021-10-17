<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;
    protected $table='kotas';
    protected $primarykey='id';
    protected $fillable=['name', 'provinsi_id'];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
