<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\BaseController;
use App\Http\Resources\AdmResource;
use Illuminate\Http\Request;
use Storage;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        //This is uploaded
/*         if($request->hasFile("silentFile")){
            $silentFile = $request->file("silentFile");
            $generateFileName = uniqid("img")."-".date("h.i.S").$silentFile->getClientOriginalName();
            Storage::putFileAs("pan/pan2/pan3", $silentFile ,$generateFileName);
            return "File success uploaded to storage";
        }
        else{
            return "File not uploaded";
        } */

        //this is delete

        /*         if(Storage::fileExists("pan/pan2/pan3/img65fe14b2cc636-11.30.ndMenlo-Regular.ttf")){
                    Storage::delete("pan/pan2/pan3/img65fe14b2cc636-11.30.ndMenlo-Regular.ttf");
                    return "File Successed deleted!";
                }
                else{
                    return "File not found!";
                } */


        //download

        /*         if (Storage::fileExists("uploadedSileFileFolder/img65fe1492ae0f8-11.30.ndMenlo-Regular.ttf")) {
                    return Storage::download("uploadedSileFileFolder/img65fe1492ae0f8-11.30.ndMenlo-Regular.ttf");
                } else {
                    return response()->json(['message' => 'Файл не найден'], 404); // 404 and return json
                } */
    }
}
