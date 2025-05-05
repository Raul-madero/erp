<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    /*
    |--------------------------------------------------------------------------
    | Base Controller
    |--------------------------------------------------------------------------
    |
    | This is the base controller class for your application. You can add
    | your custom functionality here. The base controller is a great place
    | to define your application-wide methods that all controllers can use.
    |
    */

    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
