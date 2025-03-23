<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $primaryKey = 'id_siswa';

    public $timestamps = false;

    protected $guarded = [];

    public function programpilihan() :HasOne
    {
        return $this->hasOne(ProgramPilihan::class, 'pilihanprogram', 'pilihanprogram');
    }
}
