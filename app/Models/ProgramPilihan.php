<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramPilihan extends Model
{
    protected $table = 'programpilihan';
    protected $primaryKey = 'id_programpilihan';

    public $timestamps = false;

    protected $fillable = [ 'pilihanprogram', 'biayaprogram' ];
}
