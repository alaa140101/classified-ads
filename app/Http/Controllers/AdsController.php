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

    public function __contstruct(AdsInterface $ads)
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
    }
}
