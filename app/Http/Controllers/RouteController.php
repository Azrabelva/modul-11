<?php

namespace App\Http\Controllers;

use App\Http\Controllers\RouteController;
use Illuminate\Support\Facades\Route;

class RouteController extends Controller
{
    public function index() {
        return "This is from Controller";
    }

    public function profile($profileId) {
        return "This is Profile from Controller, profile id: ".$profileId;
    }
}
