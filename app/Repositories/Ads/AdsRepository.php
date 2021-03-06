<?php
namespace App\Repositories\Ads;

use App\Traits\ImageUploadTrait;
use App\ {
    Ad,
    Favorite,
    Image
};

class AdsRepository implements AdsInterface
{
    use ImageUploadTrait;

    protected $ads;

    public function __construct(Ad $ads)
    {
        $this->ads=$ads;
    }

    public function all()
    {
            return $this->ads::with('images')->select('id','title','slug','price')->whereIn('id',
                Favorite::select('ad_id')
                    ->groupBy('ad_id')
                    ->orderByRaw('COUNT(*) DESC')
                    ->limit(8)->get()
                )->get();
    }

    public function store($request)
    {
        
        // $request->user()->ads()->create($request->all()+['slug'=>$request->title]);
        $ad = $request->user()->ads()->create($request->all()+['slug'=>$request->title]);

        if($request->file('images'))
        $this->storeImags($ad,$request->file('images'));
    }

    public function storeImags($ad,$imgArry)
    {
        foreach($imgArry as $img)
        {
           $img_name=$this->saveImages($img);

           $image=new Image();
           $image->image = $img_name;
           $ad->images()->save($image);
        }
    }

    public function getDetails($id)
    {
        return $this->ads::with(['comments' => function($q) {
            $q->with(['user:id,name']);
        }])
        ->find($id);
    }

    public function getById($id)
    {
        return $this->ads::with('images')->find($id);
    }

    public function update($request, $id)
    {
        $request->merge(['user_id' => $request->user()->id]);

    	return $this->ads->find($id)->update($request->all());
    }

    public function getByUser()
    {
        return $this->ads::whereUser_id(\Auth::user()->id)->with('currency')->get();
    }

    public function getByCategory($catId)
    {
        return $this->ads::with('images','category', 'currency')->where('category_id',$catId)->get();
        // return $this->ads::with('images:id','category', 'currency:name')->select('id')->where('category_id',$catId)->get();;
    }

    public function delete($id)
    {
        return $this->ads->findOrFail($id)->delete();
    }

    public function search($request)
    {
        return $this->ads->Filter($request);
    }

    public function getCommonAds()
    {
        return $this->ads::with('images')->select('id', 'title', 'slug', 'price')->whereIn('id',
            Favorite::select('ad_id')
            ->groupBy('ad_id')
            ->orderByRaw('COUNT(*) DESC')
            ->limit(8)
            ->get()
        );
    }
}
?>