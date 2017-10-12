<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public funtion __invoke()
    {
      return 'Welcome to Foobooks';
    }
}
