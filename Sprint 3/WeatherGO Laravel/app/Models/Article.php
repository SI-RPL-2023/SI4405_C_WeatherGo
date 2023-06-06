<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $table = 'visits';
    public function visitsCounter()
    {
        return visits($this);
    }
    public function visits()
    {
        return visits($this)->relation();
    }
}
