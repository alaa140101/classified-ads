<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    Ads\AdsInterface,
    Ads\AdsRepository,
    Favorites\FavoriteInterface,
};

class AdsController extends Controller
{
    protected $ads;
    protected $favorite;

    public function __construct(AdsInterface $ads, FavoriteInterface $favorite)
    {
        $this->ads = $ads;

        $this->favorite = $favorite;
    }

    public function all()
    {
        $ads = $this->ads->all();
    }

    public function create()
    {
        return view('ads.create');
    }

    public function store(Request $request)
    {
        // dd($request);
        $this->ads->store($request);

        return back()->with('success', 'تم إضافة إعلان');
    }

    public function edit($id)
    {
        $ad = $this->ads->getById($id);

        return view('ads.edit', compact('ad'));
    }

    public function update(Request $request, $id)
    {
        $this->ads->update($request,$id);

        return back()->with('success', 'تم تعديل الإعلان');
    }

    public function getUserAds()
    {
        $ads = $this->ads->getByUser();

        return view('ads.userAds', compact('ads'));
    }

    public function destroy($id)
    {
        $this->ads->delete($id);

        return back()->with('success', 'تم حذف الإعلان');
    }

    public function getByCategory($id)
    {
        $ads = $this->ads->getByCategory($id);

        return view('ads.adsByCategory', compact('ads'));
    }

    public function show($id)
    {
        $ad = $this->ads->getDetails($id);
        $favorited = "";
        
        if(\Auth::check())
            $favorited = $this->favorite->show($id);

        return view('ads.show', compact('ad', 'favorited'));
    }

    public function search(Request $request)
    {
        $ads = $this->ads->search($request);

        return view('ads.adsByCategory', compact('ads'));
    }
}
