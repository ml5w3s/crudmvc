<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function listUser()
    {
/*        $user = new User();
        $user -> name = 'Rosinha';
        $user -> email = 'rosa@gmail.com';
        $user -> password = '123';
        $user -> save();

        echo "<h1>Listagem de usuários</h1>";
 */
        $user = User::where('id','=',3)->first();
        
        return view('listUser',[
            'user'=> $user
        ]);
     
    }    
}
