<?php

namespace Daniellefence\Notes\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
