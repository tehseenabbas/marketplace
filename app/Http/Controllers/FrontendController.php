<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Childcategory;
use App\Models\Advertisement;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\User;
class FrontendController extends Controller
{
    

    public function findBasedOnSubcategory(Request $request,$categorySlug,Subcategory $subcategorySlug ) 
        {
        $advertisements = $subcategorySlug->ads;
        $filterByChildCategories = $subcategorySlug->ads;
        return view('product.subcategory',compact( 'advertisements','filterByChildCategories'));
    }
}
