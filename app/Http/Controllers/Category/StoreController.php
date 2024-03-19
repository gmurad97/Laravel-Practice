<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\BaseController;
use App\Http\Resources\AdmResource;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if ($request->hasFile("silentFile")) {
            $silentFile = $request->file("silentFile");
            $fileName = uniqid() . "." . $silentFile->getClientOriginalExtension();
            $silentFile->storeAs("public/silentFile/", $fileName);
            return "Файл успешно загружен.Путь:" . asset("storage/silentFile/" . $fileName);
        } else {
            return "File Does not exists";
        }
    }
}
