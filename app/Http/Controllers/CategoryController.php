<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view("category.index",compact("categories"));

        /*         $category = Category::updateOrCreate(
                    [
                        "name" => "updated Cheyenne Romaguera Jr.",
                    ],
                    [
                        "name" => "updated change Cheyenne Romaguera Jr.",
                        "parent_id" => "2",
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]

                    //if attribute found data updated another created...
                );

                dd($category->created_at->format("Y-m-d H:i:s")); // normalize data->object
                //devsense php no work for format(intellisense)
                */






        /*         $category = Category::firstOrCreate(
                    [
                        "name" => "Cheyenne Romaguera Jr",
                    ],
                    [
                        "name" => "new Cheyenne Romaguera Jr.",
                        "parent_id" => "2",
                        "created_at" => Carbon::now(),
                        "updated_at" => Carbon::now(),
                    ]
                );

                dd($category->created_at->format("Y-m-d H:i:s")); */



        /*         $category = Category::create([
                    "name"=> "new category",
                    "parent_id"=> "2",
                    "created_at"=> Carbon::now(),
                    "updated_at"=> Carbon::now(),
                ]);

                dd($category->name); */


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


        /*         $categories = Category::withTrashed()->find(10); // trashed + notrashed element

                dd($categories->id); */

        /* $categories = Category::find(3);
        $categories->delete(); */

        /*         $categories = Category::onlyTrashed()->get(); //only trashed element

                foreach ($categories as $category) {
                    dump($category->name);
                } */

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
