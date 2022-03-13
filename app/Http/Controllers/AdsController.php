<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    Ads\AdsInterface,
    Ads\AdsRepository,
};

class AdsController extends Controller
{
    protected $ads;

    public function __construct(AdsInterface $ads)
    {
        $this->ads = $ads;
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
}
