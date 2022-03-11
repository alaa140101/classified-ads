<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\{
    Ads\AdInterface,
    Ads\AdRepository,
};

class AdsController extends Controller
{
    protected $ads;

    public function __contstruct(AdInterface $ad)
    {
        $this->ads = $ad;
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
        $this->ads->store($request);
    }
}
