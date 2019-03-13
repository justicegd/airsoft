<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Article extends Model
{
    protected $table = "article";

    public function category()
    {
        return $this->belongsTo('App\Models\Category', 'category_id', 'id');
    }

    public function getImgUrlAttribute(){
        $img = $this->img;
        return Storage::url($img );
    }

    public function getImgAttribute($value){
        $value = !empty($value)?$value:"https://i.imgur.com/siip6vJ.jpg";
        return $value ;
    }




}
