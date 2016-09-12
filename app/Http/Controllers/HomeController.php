<?php
namespace Matboksen\Http\Controllers;

use DB;
use Auth;
use Matboksen\Models\Recipe;

class HomeController extends Controller
{
    public function index()
    {
        if(Auth::check()) {
            $recipes = DB::table('recipes')->orderBy('created_at', 'desc')->get();

            return view('home')
                ->with('recipes', $recipes);
        }
        return view('home');
    }
}