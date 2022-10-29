<?php

namespace App\Http\Controllers;

use App\Models\detail_user;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class DetailUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        // $data = DB :: select('SELECT * FROM detail_users JOIN users ON detail_users.user_id=users.id');
        $data = detail_user::all();
        return view ('page/detailuser/tabeluser', compact ('data'));
        // dd ($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User :: all();
        
        return view ('page/detailuser/tambah', compact ('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd ($request);
        $validator = $request-> validate([
            'user_id' => 'required|integer',
            'telp_user' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|integer',
            'ktp' => 'required|image|max:10000|mimes:jpg',
            'selfi' => 'required|image|max:10000|mimes:jpg',
            'profil' => 'required|image|max:10000|mimes:jpg',
        ]);

        $file = $request->file('ktp')->store('ktp');
        $file2 = $request->file('selfi')->store('selfi');
        $file3 = $request->file('profil')->store('profil');

        detail_user :: create (
           [
            'user_id' => $request -> user_id,
            'telp_user' => $request -> telp_user,
            'alamat' => $request -> alamat,
            'kota' => $request -> kota,
            'provinsi' => $request -> provinsi,
            'kode_pos' => $request -> kode_pos,
            'ktp' => $file,
            'wajah_ktp' => $file2,
            'foto_profil' => $file3,
       ]);

        return redirect ('/index');
        
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
        $data   = detail_user::whereId($id)->first();
        // $data = detail_user :: findOrFail ($id);
        $user = User :: find ($id);
        
        // $data = detail_user :: findOrFail ($id);
        // $data = DB :: select('SELECT * FROM detail_users JOIN users ON detail_users.user_id=users.id');
        return view ('page/detailuser/edit', compact ('data', 'user'));

        // dd($id);
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
        // $validator = $request-> validate([
            //     'user_id' => 'required|integer',
            //     'telp_user' => 'required|string',
            //     'alamat' => 'required|string',
            //     'kota' => 'required|string',
            //     'provinsi' => 'required|string',
            //     'kode_pos' => 'required|integer',
            //     'ktp' => 'required|image|max:10000|mimes:jpg',
            //     'wajah_ktp' => 'required|image|max:10000|mimes:jpg',
            //     'foto_profil' => 'required|image|max:10000|mimes:jpg',
            // ]);
        // dd ($request->file != null);
        $data = detail_user :: whereId($id)->first();
        $user = User :: find ($id);

        $data ->update([
            'user_id' => $request -> user_id,
            'telp_user' => $request -> telp_user,
            'alamat' => $request -> alamat,
            'kota' => $request -> kota,
            'provinsi' => $request -> provinsi,
            'kode_pos' => $request -> kode_pos,]);
        $user ->update([
            'username' => $request -> username,
        ]);

        if ($request ->file() != null){

            if ($request ->file('ktp') != null){
            $file = $request->file('ktp')->store('ktp');
            $data ->update([
                'ktp' => $file]);
            }

            if ($request ->file('selfi') != null){
                $file2 = $request->file('selfi')->store('selfi');
         
            $data ->update([
                
                'wajah_ktp' => $file2,
          
            ]); 
            }

            if ($request ->file('profil') != null){
                $file3 = $request->file('profil')->store('profil');
    
            $data ->update([
                
                'foto_profil' => $file3,
             
            ]); 
            }
        } else {
            $data->update([
                // 'user_id' => $data -> user_id,
                // 'telp_user' => $data -> telp_user,
                // 'alamat' => $data -> alamat,
                // 'kota' => $data -> kota,
                // 'provinsi' => $data -> provinsi,
                // 'kode_pos' => $data -> kode_pos,
                'ktp' =>$data->ktp, 
                'selfi' =>$data->wajah_ktp,
                'profil' =>$data->foto_profil,

            ]);

            return redirect('page/detailuser');
            // ->with('error', 'Tidak Ada Yang di Rubah');
        }

        return redirect('page/detailuser') ;
        // ->with ('success', 'Data Berhasil Dirubah');
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
        $data = detail_user::findorFail($id);
        $data2 = User :: find ($id) ;

        // Storage::delete('ktp/'. $data->ktp);
        // Storage::delete('selvi/'. $data->wajah_ktp);
        // Storage::delete('profil/'. $data->foto_profil);
        $data2->delete();
        $data->delete();
        Storage::delete([$data->ktp,$data->wajah_ktp,$data->foto_profil]);


        return redirect('/index')->with('success', 'Data berhasil Dihapus');
    }

    public function wilayah ()
    {

        $data = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        return $data->json();
    //     dd('haaiii');
    }

}
