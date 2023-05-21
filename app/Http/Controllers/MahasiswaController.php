<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMahasiswaRequests;
use Illuminate\Http\Request;
use App\Http\Resources\MahasiswaResource;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return MahasiswaResource::collection(Mahasiswa::all());
        return MahasiswaResource::collection(Mahasiswa::orderBy('Nim', 'asc')->paginate(5));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMahasiswaRequests $request)
    {
        //
        // return response()->json('hello');
        return new MahasiswaResource(Mahasiswa::create(
            [
                'Nim' => $request->Nim,
                'Nama' => $request->Nama,
                'Jurusan' => $request->Jurusan,
                'No_Handphone' => $request->No_Handphone,
                'Email' => $request->Email,
                'Tanggal_Lahir' => $request->Tanggal_Lahir,
                'kelas_id' => $request->kelas_id,
            ]
        ));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mahasiswa $mahasiswas)
    {
        return new MahasiswaResource($mahasiswas);

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
        //
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
