<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Obat extends Model
{
    use HasFactory, Notifiable;
    protected $table = 'obats';
    protected $fillable = [
        'nama_obat',
        'kemasan',
        'harga'
    ]; 
}