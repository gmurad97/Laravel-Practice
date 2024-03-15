<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Category\BaseController;
use App\Http\Requests\CategoryRequest;

class IndexController extends BaseController
{
    public function __invoke(CategoryRequest $request)
    {
        $this->service->index();
    }
}
