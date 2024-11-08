<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $fillable = ['nis','password','nama_siswa'];
    protected $guarded = ['id'];
    protected $hidden = ['passsword'];

    public function kelas()
    {
        return $this->belongsTo(kelas::class); 
    }
    
    public function nilai()
    {
        return $this->hasMany(nilai::class); 
    }
}
