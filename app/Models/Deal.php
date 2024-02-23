<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deal extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_id',
        'contact_id',
        // 'stage',
        'value',
        'probability',
        'expected_close_date',
        'notes',
    ];

    // Define relationships
    public function account()
    {
        return $this->belongsTo(Organizations::class, 'account_id');
    }

    public function contact()
    {
        return $this->belongsTo(Contacts::class, 'contact_id');
    }

    // public function deals_Stage()
    // {
    //     return $this->belongsTo(Deals_Stages::class, 'stage');
    //  }
}
