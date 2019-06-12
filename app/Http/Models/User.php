<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{

    protected $table = 'users';
    protected $fillable = [
        'name' ,'email','password' ,'phone'
    ];

    public static function getDate(){
        $users =  User::get();
        $user_id = [];
        foreach ($users as $user){
            $user_id [] = $user->id;
        }
        return $user_id[array_rand($user_id)];
    }

}
