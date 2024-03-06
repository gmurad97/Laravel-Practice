<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {

/*         $categories = Category::all();

        dd($categories); */



        /* $category = Category::create([
            "name"=> "new category",
            "parent_id"=> "2",
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),
        ]); */


/*         $category = Category::find(28);

        $category->update(
            [
                "name" => "updated new category",
                "parent_id" => "2",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]
        ); */
        // |||||||||||||||||||||||||||||||||||||||||||||

/*         $category = Category::find(28);

        $category->name = "updated new category1";

        $category->save(); */

        ///////////////////////////////////

        /* $categories = Category::find(10);
        $categories->delete(); */


/*         $categories = Category::withTrashed()->find(10);

        dd($categories->id); */

        /* $category = Category::withTrashed()->find(10);

        $category->restore(); */
    }

    public function show($id)
    {
        $category = Category::find($id);
        dump($category->getAttributes());
    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
