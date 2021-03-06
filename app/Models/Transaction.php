<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'item_id', 'quantity','total',
        'status','payment_url'
        
    ];

    #relase tabel
    public function item()
    {
        return $this->hasOne(Item::class,'id', 'item_id');
    }
    public function user()
    {
        return $this->hasOne(User::class,'id','user_id');
    }

     #konversi format waktu
     public function getCreatedAtAttribute($value)
     {
         return Carbon::parse($value)->timestamp;
     }
     public function getUpdatedAtAttribute($value)
     {
         return Carbon::parse($value)->timestamp;
     }
}
