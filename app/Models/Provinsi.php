<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table='provinsis';
    protected $primarykey='id';
    protected $fillable=['name'];

    public function kabupatens()
    {
        return $this->hasMany(Kota::class);
    }
}
