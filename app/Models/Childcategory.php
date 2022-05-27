<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\SubCategory;


class Childcategory extends Model
{
    use HasFactory;
    Protected $fillable= ['name','subcategory_id','slug'];  
    public function getRouteKeyName()
    {
        return 'slug';
    }
    

    public function subcategory(){
        return $this->belongsTo(SubCategory::class,'subcategory_id','id');
    }

}
