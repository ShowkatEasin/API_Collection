<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','author','publisher','published_date']; //attributes
    protected $table = 'books';  //table
    use HasFactory;
}
