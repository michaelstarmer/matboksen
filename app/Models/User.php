<?php

namespace Matboksen\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    protected $table = 'users';

    protected $fillable = [
        'username', 
        'email', 
        'password',
        'firstname',
        'lastname',
        'location',
    ];

    protected $hidden = [
        'password', 
        'remember_token',
    ];
    public function getName()
    {
        if ($this->first_name && $this->last_name) {
            return "{$this->first_name} {$this->last_name}";
        }
        if ($this->first_name) {
            return $this->first_name;
        }
        return null;
    }
    public function getNameOrUsername() {
        return $this->getName() ?: $this->username;
    }
    public function getFirstnameOrUsername() {
        return $this->first_name ?: $this->username;
    }
    public function recipes()
    {
        return $this->hasMany('Matboksen\Models\Recipe', 'user_id');
    }
}
