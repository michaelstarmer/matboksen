<?php

namespace Matboksen\Http\Controllers;

use Illuminate\Http\Response;
use Storage;
use File;
use Auth;
use DB;
use Input;
use Matboksen\Models\User;
use Matboksen\Models\Recipe;
use Matboksen\Models\Ingredient;
use Matboksen\Models\Task;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    public function getRecipe($singleRecipe) {
        // For displaying individual recipes.
        $recipe = Recipe::where('title', $singleRecipe)->first();

        $recipeId = DB::table('recipes')->select('id')
        ->where('title', $singleRecipe)
        ->first();

        $ingrForRecipe = DB::table('ingredients')->select('ingredient')
        ->where('recipe_id', $recipeId->id)
        ->get();


        if (!$recipe) {
            abort(404);
        }

        return view('recipes.show')->with('recipe', $recipe)->with('ingrForRecipe', $ingrForRecipe);
    }
    public function newRecipe()
    {
        return view('recipes.index');
    }
    public function postRecipe(Request $request)
    {

        $this->validate($request, [
            'title' => 'required|max:100',
        ]);
        $recipe = new Recipe;
        $recipe->title = $request->title;
        $recipe->description = $request->description;
        $recipe->process = $request->process;
        $recipe->save();
        $file = $request->file('image');
        $filename = $request['title'] . '.jpg';

        if($file) {
            Storage::disk('public')->put($filename, File::get($file));
        }

        foreach($request->ingredients as $ingredient){
            $recipe->ingredients()->create([
                'ingredient' => $ingredient
                ]);
        }

          Auth::user()->recipes()->create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'process' => $request->input('process'),
        ]);

        //DB::table('ingredients')->belongsToRecipe()->insert($capture_field_vals);

        return redirect()->route('home')
            ->with('info', 'Oppskrift lagret.');
    }
    public function getRecipeImage($filename)
    {
        $file = Storage::disk('public')->get($filename);
        return new Response($file, 200);
    }
    public function ingrToShoplist($singleRecipe)
    {

        $ingrForRecipe = DB::table('ingredients')->select('ingredient')
        ->where('recipe_id', $singleRecipe)
        ->get();

        foreach($ingrForRecipe as $ingr) {
            $task = new Task;
            $task->name = $ingr->ingredient;
            $task->save();
        }
        return redirect()->route('shoplist.index')->with('info', 'Alle ingredienser er lagt til i handlelisten din! :)');
    }
}