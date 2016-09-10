<?php
namespace Matboksen\Http\Controllers;

use Auth;
use Matboksen\Models\Recipe;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $recipes = Recipe::all();

            return view('home')
                ->with('recipes', $recipes);
        }
        return view('home');
    }
}