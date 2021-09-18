<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;
    protected $fillable  = ['key_ar','key_en','site_ar','site_en','description_ar','description_en'];

    public function getDescriptionAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->description_ar;
        }
        return $this->description_en;
    }
    
    public function getSiteAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->site_ar;
        }
        return $this->site_en;
    }

    public function getKeyAttribute()
    {
        if (app()->getLocale() == 'ar') {
            return $this->key_ar;
        }
        return $this->key_en;
    }


}
