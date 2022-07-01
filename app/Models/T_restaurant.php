<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class T_restaurant extends Model
{
    use HasFactory;
    protected $table = "t_restaurants";
    protected $fillable=['pro_name','image','description', 'price', 'categories_id'];
   public function category(){
       return $this->belongsTo(Category::class,'categories_id','id');
   }
}
