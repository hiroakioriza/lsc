<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\ModelStatus\HasStatuses;

class Servisan extends Model
{
    use HasFactory;

    protected $table = 'servisans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'KodeServis','NamaBarang','Kategori','Kondisi','Status','Notes','EstHarga'
    ];
}
