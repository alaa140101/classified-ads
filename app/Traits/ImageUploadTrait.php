<?php 

namespace App\Traits;



trait ImageUploadTrait
{
  protected $path = "public/images/";

  protected $thumb_path = "app/public/images/thumbs";

  protected $thumb_height = 150;
  
  protected $thumb_width = 150;

  public function saveImages($img)
  {
    $img_name = $this->imageName($img);

    $img->storeAs($this->path, $img_name);

    \Image::make($img)->resize($this->thumb_width, $this->thumb_height)->save(storage_path($this->thumb_path.'/'.$img_name));

    return $img_name;
  }

  public function imageName($image)
  {
    return time().'-'.$image->getClientOriginalName();
  }
}