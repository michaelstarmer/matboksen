<?php 

namespace Matboksen\Models;
use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $table = 'recipes';
    protected $fillable = [
        'title',
        'description',
        'ingredients',
        'process',
    ];
    public function user()
    {
        return $this->belongsTo('Matboksen\Models\User', 'user_id');
    }
    public function ingredients()
    {
        return $this->hasMany('Matboksen\Models\Ingredient', 'recipe_id');
    }
    public function processes()
    {
        return $this->hasMany('Matboksen\Models\Process', 'recipe_id');
    }
}