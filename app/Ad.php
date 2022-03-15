<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Helpers\helper as Helper;

class Ad extends Model
{
    protected $fillable = [
        'title', 'slug', 'text', 'price', 'user_id', 'category_id', 'country_id', 'currency_id'
    ];

    protected $guarded = ['id'];

    public function setSlugAttribute($value)
    {
        $slug = Helper::slug($value);

        $uniqueslug = Helper::uniqueSlug($slug, 'ads');

        $this->attributes['slug'] = $uniqueslug;
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function country()
    {
        return $this->belongsTo('App\Country');
    }

    public function images()
    {
        return $this->hasMany('App\Image');
    
    }
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function favorites()
    {
        return $this->hasMany('App\Favorite');
    }

    public function scopeFilter($query, Request $request)
        {
            if($request->country)
            {
                $query->whereCountry_id($request);
            }
            if($request->category)
            {
                $query->whereCategory_id($request);
            }

            if($request->keyword)
            {
                $query->where('title', 'LIKE', '%'.$request->keyword.'%');
            }
            
            return $query->with('images')->get();
        }
}
