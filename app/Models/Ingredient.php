<?php 

namespace Matboksen\Models;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    protected $table = 'ingredients';
    protected $fillable = [
        'recipe_id',
        'ingredient',
    ];

    public function belongsToRecipe()
    {
        return $this->belongsTo('Matboksen\Models\Recipe', 'user_id');
    }
}