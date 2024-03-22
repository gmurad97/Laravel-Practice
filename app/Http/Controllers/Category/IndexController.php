<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\BaseController;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;

class IndexController extends BaseController
{
    public function __invoke(CategoryRequest $request)
    {

        /* //test firefox for developers :D
        $categories = Category::all();
        return $categories; */

        $categories = Category::paginate(10);
        //if page not found redirect to page=1 && or negative (A-Ba-b) page=1(auto)
        if (!$categories->isEmpty()) {
            return view("category", compact("categories"));
        } else {
            return redirect()->route("kuska");
        }
    }
}
