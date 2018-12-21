<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title','category_id','featured','content','slug'
    ];
    public function getFeaturedAttributes($featured){
        return asset($featured);
    }
    protected $dates = ['deleted_at'];
    
    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function tags(){
        return $this->belongsToMany('App\Tag');
    }
}
