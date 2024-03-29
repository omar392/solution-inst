<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'phone',
        'whatsapp',
        'facebook',
        'linkedin',
        'twitter',
        'youtube',
        'snapchat',
        'instagram',
        'address_ar',
        'address_en',
    ];
    public function getAddressAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->address_ar;
        }
        return $this->address_en;
    }
}
