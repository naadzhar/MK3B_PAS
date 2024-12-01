<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ListApps extends Model
{
    use HasFactory;

    protected $fillable = ['application', 'description', 'price'];

    // Jika ada relasi, definisikan di sini
}