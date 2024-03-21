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
        if ($request->hasFile("silentFile")) {
            $silentFile = $request->file("silentFile");
            $generateFileName = uniqid() . "." . $silentFile->getClientOriginalExtension();
            $silentFile->storeAs("public/siletFile/", $generateFileName);
            return "File Success uploaded to storage";
        } else {
            return "File Does not exists";
        }
    }
}
