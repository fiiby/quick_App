<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    // Add fillable property
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'job_title',
    ];
    //Add relationships
    public function organization()
    {
        return $this->belongsTo(Organizations::class);
    }
}

