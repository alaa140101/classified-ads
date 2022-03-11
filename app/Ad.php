<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    // protected $fillable = [
        // 'title', 'slug', 'text', 'price', 'user_id', 'category_id', 'country_id', 'currency_id'
    // ];

    protected $guarded = ['id'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
