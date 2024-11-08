<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class walas extends Authenticatable
{
    use HasFactory;
    protected $table = 'walas';
    protected $fillable = ['nig','password','nama_walas'];
    protected $guarded = ['id'];
    protected $hidden = ['passsword'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class, 'kelas_id'); 
    }
    
    public function nilai()
    {
        return $this->hasOne(nilai::class, 'walas_id'); 
    }
}
