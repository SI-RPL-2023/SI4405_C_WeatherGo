<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;
    protected $table = 'reply_feedback';
    protected $fillable = [
        'user_id',
        'feedback_id',
        'reply_message',
    ];
}
