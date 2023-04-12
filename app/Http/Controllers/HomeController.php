<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB; 
use App\Models\User;
use View;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $users = User::get();
  
        return View::make('welcome', compact(['users']));

    }
}
