<?php

namespace App\Http\Controllers;

use App\Models\detail_rental;
use App\Models\rental;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class detailRentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data = detail_rental::select('detail_rentals.id', 'rentals.nama_rental')->join('rentals', 'detail_rentals.rental_id', '=', 'rentals.id')->get();
        $data = detail_rental::all();
        return view('page.detailrental.detailrental', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = rental::all();
        return view('page.detailrental.tambahDetail', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $request->validate([
            'rental_id' => 'required',
            'telp_rental' => 'required|integer',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|integer',
            'ktp' => 'required|image|max:10000|mimes:jpg',
            'wajah_ktp' => 'required|image|max:10000|mimes:jpg',
            'koordinat' => 'required|image|max:10000|mimes:jpg',
            'foto_profil' => 'required|image|max:10000|mimes:jpg',
        ]);

        $file = $request->file('ktp')->store('ktp');
        $file1 = $request->file('wajah_ktp')->store('wajah_ktp');
        $file2 = $request->file('koordinat')->store('koordinat');
        $file3 = $request->file('foto_profil')->store('foto_profil');

        detail_rental::create([
            'rental_id' => $request->rental_id,
            'telp_rental' => $request->telp_rental,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kode_pos' => $request->kode_pos,
            'ktp' => $file,
            'wajah_ktp' => $file1,
            'koordinat' => $file2,
            'foto_profil' => $file3,
        ]);
        return redirect('/detail_rental')->with('success', 'data berhasil ditambah');
        // dd($request);
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
        // $data = detail_rental::whereId($id)->first();
        // $data = detail_rental::whereId($id)->first();
        // $rental = rental::find($id);
        $data = detail_rental::find($id);
        $rental = rental::all();
        return view('page.detailrental.editDetail', compact('data', 'rental'));
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
        // dd($request);
        // $data = detail_rental::whereId($id)->first();
        $data = detail_rental::find($id);
        // $rental = rental::find($id);

        $validator = $request->validate([
            'rental_id' => 'required',
            'telp_rental' => 'required|integer',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'alamat' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'kode_pos' => 'required|integer'
            // 'ktp' => 'image|max:10000|mimes:jpg',
            // 'wajah_ktp' => 'image|max:10000|mimes:jpg',
            // 'koordinat' => 'image|max:10000|mimes:jpg',
            // 'foto_profil' => 'image|max:10000|mimes:jpg',
        ]);
        // $data->update($validator);
        // dd($validator);
        if (!$validator) {
            return redirect()->route('detail_rental.update', $id)->withErrors($validator);
            // ->withInput();
        }

        if ($request->file() != null) {

            if ($request->file('ktp') != null) {
                $request->validate(['ktp' => 'image|max:10000|mimes:jpg']);
                $file = $request->file('ktp')->store('ktp');
                Storage::delete([$data->ktp]);
                $data->update([
                    'ktp' => $file

                ]);
            }

            if ($request->file('wajah_ktp') != null) {
                $file2 = $request->file('wajah_ktp')->store('selfi');
                $request->validate(['wajah_ktp' => 'image|max:10000|mimes:jpg']);
                Storage::delete([$data->wajah_ktp]);
                $data->update([
                    'wajah_ktp' => $file2,
                ]);
            }

            if ($request->file('koordinat') != null) {
                $file3 = $request->file('koordinat')->store('koordinat');
                $request->validate(['koordinat' => 'image|max:10000|mimes:jpg']);
                Storage::delete([$data->koordinat]);
                $data->update([
                    'koordinat' => $file3,
                ]);
                if ($request->file('foto_profil') != null) {
                    $file4 = $request->file('foto_profil')->store('profil');
                    $request->validate(['foto_profil' => 'image|max:10000|mimes:jpg']);
                    Storage::delete([$data->foto_profil]);
                    $data->update([
                        'foto_profil' => $file4,

                    ]);
                }
            } 
        }
        $data->update($validator);
        return redirect('/detail_rental');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = detail_rental::findorFail($id);
        // dd($data->ktp);
        // $file_path = app_path() . '/images/news/';
        $data->delete();
        Storage::delete([$data->ktp,$data->wajah_ktp,$data->koordinat,$data->foto_profil]);

        return redirect('/detail_rental')->with('success', 'Data berhasil Dihapus');
        // unlink($file_path);
    }
}
