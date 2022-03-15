<?php 

namespace App\Repositories\Favorites;

use App\Favorite;

class FavoriteRepository implements FavoriteInterface 
{
  protected $favorite;

  public function __construct(Favorite $favorite)
  {
    $this->favorite = $favorite;  
  }

  public function store($request)
  {
    $request->user()->favAds()->attach($request->id);
  }

  public function show($id)
  {

  }

  public function delete($id)
  {

  }
}