<?php

namespace App\Models;

use App\Models\Contacts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Organizations extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'industry', 'organize'];
    public function contacts()
    {
        return $this->hasMany(Contacts::class, 'organizations_contacts');
    }
}
