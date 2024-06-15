<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function printHello()
	{
		return response("Hello World");
	}
}
