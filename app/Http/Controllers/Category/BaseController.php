<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Services\Category\Service;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    /**
     * @var Service $service
     */
    public $service;

    public function __construct(Service $service){
        $this->service = $service;
        $this->service = $service;
    }
}
