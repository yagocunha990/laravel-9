<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    protected $model;

    public function __construct(User $user){
        $this->model = $user;

    }

    public function index(Request $request){


        $users = $this->model->getUsers(search: $request->search ?? '');




       return view('users.index', compact('users'));
    }

    public function show($id){
        //$user = $this->model->where('id', $id)->first();
        if(!$user = User::find($id))
        return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }

    public function create(){
        return view('users.create');
    }

    public function store(StoreUpdateUserFormRequest $request){


        $data = $request->all();
        $data['password'] = bcrypt($request->password);
        $this->model->create($data);

        return redirect()->route('users.index');

    }
//metodo para editar
    public function edit($id){

        if(!$user = User::find($id))
        return redirect()->route('users.index');

        return view('users.edit', compact('user'));
    }
//metodo para atualizar o usuario
    public function update(StoreUpdateUserFormRequest $request, $id){

        if(!$user = User::find($id))
        return redirect()->route('users.index');

        $data = $request->only('name','email');
        if($request->password)
        $data['password'] = bcrypt($request->password);

        $user->update($data);

        return redirect()->route('users.index');
  }
  ////////////////////
  public function destroy($id){
    //$user = User::where('id', $id)->first();
    if(!$user = User::find($id))
    return redirect()->route('users.index');

    $user->delete();

    return redirect()->route('users.index');
}


}


