<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie_season extends Model
{
    use HasFactory;
    protected $table='serie_seasons';
    protected $fillable=[
        'serie_id',
        'name',
        'story',
        'poster',

    ];

    public function serie()
    {
        return $this->belongsTo(Serie::class,'serie_id','id');
    }


}
