<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    // public function index(User $model)
    // {
    //     return view('users.index', ['users' => $model->paginate(15)]);
    // }

    public function index()
    {
        $data = User::all();
    
        return view ('/page/user/tabeluser', compact ('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view ('page/user/tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request-> validate([
            'nama_user' => 'required|string',
            'username' => 'required|string|min:5',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string',
            'password_confir' => 'required|same:password',
     
        ]);    
        User :: create (
            [
                'nama_user' => $request -> nama_user,
                'username' => $request -> username,
                'email' => $request -> email,
                'password' => $request -> password,
                    
            ]
        ) ;

        return redirect('page/user')->with('success', 'Data berhasil ditambahkan');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = User :: findOrFail ($id);

        return view ('page/user/edit', compact ('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        // dd ($request);
        $data = User :: findOrFail ($id) ;

        $validator = $request-> validate([
            'nama_user' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|string',
            // 'password' => 'required|string',
            // 'password_confir' => 'required|same:password',
     
        ]);

        $data ->update([
            'nama_user' => $request -> nama_user,
            'username' => $request -> username,
            'email' => $request -> email,
            // 'password' => Hash::make($request['password']),
        ]);
        return redirect(url('page/detailuser/'. Auth::user()->id . '/edit')) ->with ('success', 'Data Berhasil Dirubah');
    }

    public function updatepassword(Request $request, $id)
    {

        // dd ($request);
        $data = User :: findOrFail ($id) ;

        $validator = $request-> validate([
            // 'nama_user' => 'required|string',
            // 'username' => 'required|string',
            // 'email' => 'required|string',
            'password' => 'required|string',
            'password_confir' => 'required|same:password',
     
        ]);

        $data ->update([
            // 'nama_user' => $request -> nama_user,
            // 'username' => $request -> username,
            // 'email' => $request -> email,
            'password' => Hash::make($request['password']),
        ]);
        return redirect(url('page/detailuser/'. Auth::user()->id . '/edit')) ->with ('success', 'Data Berhasil Dirubah');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $data = User :: findOrFail ($id) ;
        $data->delete();
    
        return redirect('page/user') ->with ('success', 'Data Berhasil Dihapus');
    }
}
