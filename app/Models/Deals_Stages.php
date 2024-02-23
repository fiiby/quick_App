<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deals_Stages extends Model
{
    use HasFactory;

    protected $table = 'Deals_Stages'; // Specify the table name

    protected $fillable = ['name']; // Specify the fillable attributes
}
