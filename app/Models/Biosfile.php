<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biosfile extends Model
{
    use HasFactory;

    protected $table = 'biosfiles';
    protected $primaryKey = 'id';
    protected $fillable = [
        'namabios','kategoribios','keteranganbios','filebios'
    ];
}
