<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Observers\InvitationObserver;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['url','email'];

    protected  static function boot()
    {
        parent::boot();
        static::observe(new InvitationObserver());
    }

}
