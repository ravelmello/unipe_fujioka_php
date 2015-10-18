<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser()
    {
        //


        return view('login');



    }

    public function index(Request $request)
    {
      # code...


      $email = $request->input('email');
      $password = $request->input('password');
      $encrypt = md5($password);

      $query = DB::table('pos_usuario') ->select('email','password')
                                        ->where('email','=', $email)
                                        ->where('password','=',$encrypt)->get();



     if($query != NULL)
     {
       return view('index');

     }
     else {

       return view('login');

     }


    }


    public function cadastro()
    {

              return view('cadastro');

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create(Request $request)
    {
        //


        $input = $request->all();
        $user = new User();

        $user->name = $input['name'];
        $user->email = $input['email'];
        $encript = md5($input['password']);
        $user->password = $encript;

        $user->address = $input['address'];
        $user->phone_number = $input['fone'];
        $user->cep = $input['cep'];

        $user->save($input);


        return view('index');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        //
        $users = DB::table('pos_usuario')->get();
        return view('show', ['users'=>$users]);


    }


    public function delete($id){


      return view('delete');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      //
      $edit = DB::table('pos_usuario')
                      ->where('id', '=',$id)
                      ->get();

      return view('edit', ['user'=>$edit[0]]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $input = $request->all();
        $user = [];


        $user['name'] = $input['name'];
        $user['email'] = $input['email'];
        $user['address'] = $input['address'];
        $user['phone_number'] = $input['fone'];
        $user['cep'] = $input['cep'];

        $update = DB::table('pos_usuario')
                      ->where('id','=', $input['id'])
                      ->update($user);


        return redirect('show');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //


    }
}
