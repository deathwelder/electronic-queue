<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Log extends Model
{

    protected $fillable = ['task_id', 'status', 'created_at', 'updated_at'];

    public function scopeRecordingStatusNul($status) {
      return $status->where('status', '=', 1);
    }

    use HasFactory;
}
