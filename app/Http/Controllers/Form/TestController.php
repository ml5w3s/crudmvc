<?php

namespace App\Http\Controllers\Form;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class TestController extends Controller
{
    //classe chamada quando a uri /ml5/public/usuarios é requisitada - rota users.listAllUsers
    public function listAllUsers()
    {
        $users = User::all();
        return view('listAllUsers',[
            'users'=>$users
        ]);
    }
    //classe chamada para listar usuário especifico - rota user.list 
    public function listUser(User $user)
    {
        ($user);
        return view('listUsers',[
            'user'=>$user
        ]);
    }
    //classe para cadastrar novo registro no banco
    public function formAddUser()
    {
        ($user);
        return view('addUser');
    }
    //classe para retornar a lista depois das operação de inclusão e edição  
    public function storeUser(Request $request)
    {
        $user = new User();
        $user -> name = $request->name;
        $user -> email = $request->email;
        $user -> password = Hash::make($request->password);
        $user -> save();

        return redirect()->route('users.listAllUsers'); 
    }
    public function formEditUser(User $user){
        return view('editUser',[
            'user' => $user
        ]);
    }
   public function edit(user $user, Request $request){
       $user -> name = $request->name;
       if(filter_var($request->email,FILTER_VALIDATE_EMAIL)){
           $user->email=$request->email;
       }
       if(!empty($request->password)){
           $user->password=Hash::make($request->password);
       }
        $user -> save();
        return redirect()->route('users.listAllUsers');
   }
    public function destroy(user $user){
        $user -> delete();
        return redirect()->route('users.listAllUsers');
   } 
}
