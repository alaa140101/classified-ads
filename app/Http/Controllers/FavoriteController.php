<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    Favorites\FavoriteInterface,
    Favorites\FavoriteRepository,
};

class FavoriteController extends Controller
{
    protected $favorite;

    public function __construct(FavoriteInterface $favorite)
    {
        $this->middleware('auth', ['only' => ['store', 'destroy']]);
        $this->favorite = $favorite;
    }

    public function index()
    {
        $userfav = $this->favorite->all();

        return view('ads.userFavorites', compact('userfav'));
    }

    public function store(Request $request)
    {
        $this->favorite->store($request);
    }

    public function destroy($id)
    {
        $this->favorite->delete($id);
    }
}
