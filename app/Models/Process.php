<?php

namespace Matboksen\Models;
use Illuminate\Database\Eloquent\Model;

class Process extends Model
{
    protected $table = 'processes';
    protected $fillable = [
        'recipe_id',
        'process',
    ];

    public function belongsToRecipe()
    {
        return $this->belongsTo('Matboksen\Models\Recipe', 'user_id');
    }
}