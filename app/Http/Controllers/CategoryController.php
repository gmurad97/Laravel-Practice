<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Model;
use App\Models\Post;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryController extends Controller
{








/*     public function showSubsCategory($categories){

        $output = "<ul>";

        foreach($categories as $category){
            $output .= "<li>".$category->name;
            if($category->subcategories->isNotEmpty()){
                $output .= $this->showSubsCategory($category->subcategories);
            }
            $output .= "</li>";
        }

        $output .= "</ul>";
        return $output;
    } */



    public function index()
    {/*

        $subcategory = Category::find(1)->SubCategories;
        dd($subcategory);

 */
       /*  $category = Category::find(1)->posts;

        dd($category); */
/*         $categories = Category::all();
        echo "<ul>";
        foreach($categories as $category){
            echo "<li><h4>".$category->name . "</h4>";
            foreach($category->posts as $post){
                echo "<p>" . $post->name ."</p>";
            }
            echo "</li>";
        }
        echo "</ul>"; */



/*         $posts = Category::find(1)->posts;
        dd($posts); */


        /* $parentCategories = Category::whereNull("parent_id")->get(); */
        /* dd($parentCategories); */
        /* print($this->showSubsCategory($parentCategories)); */

/*         $subs = Category::find(2)->subcategories;
        dd($subs); */





/*         $baseCategories = Category::parent();
        $createShower = $this->showCategories($baseCategories);

        echo $createShower; */




/*         $product = Product::find(1);
        dd($product->category); */

/*         $products = Category::find(1);

        dd($products->products); */
        /*         $categories = Category::where("id","",""); */


        /*         $categories = Category::find(1);

                dd($categories->products()); */


        /*         $categories = Category::query()->count();
                dd($categories);


                return view("category.index", compact("categories")); */

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
