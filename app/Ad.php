<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Helpers\helper;

class Ad extends Model
{
    // protected $fillable = [
        // 'title', 'slug', 'text', 'price', 'user_id', 'category_id', 'country_id', 'currency_id'
    // ];

    protected $guarded = ['id'];

    public function setSlugAttribute($value)
    {
        $slug = helper::slug($value);

        $uniqueslug = helper::uniqueSlug($slug, 'ads');

        $this->attributes['slug'] = $uniqueslug;
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
