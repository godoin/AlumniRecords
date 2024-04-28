<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $table = 'activity_log';

    protected $fillable = [
        'event',
        'subject_type',
        'causer_id',
        'properties',
    ];

    public function user() {
        return $this->belongsTo(User::class, 'causer_id', 'id');
    }
}
