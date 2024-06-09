<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Make the table columns insertable
    protected $fillable = ['title', 'author', 'description'];

    use HasFactory;
}
