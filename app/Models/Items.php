<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Items extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'price','type',
        'picturePath'
        
    ];

    #konversi format waktu
    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }
    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->timestamp;
    }

    #konversi ke array
    public function toArray()
    {
        $toArray = parent::toArray();
        $toArray['picturePath']=$this->picturePath;
        return $toArray;
    }
    public function getPicturePathAttribute()
    {
        return url('').Storage::url($this->attributes['picturePath']);
    }
}
