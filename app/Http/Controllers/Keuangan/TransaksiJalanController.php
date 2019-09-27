<?php

namespace App\Http\Controllers\Keuangan;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Pemeriksaan;
use App\RawatJalan;
use App\Ruang;
use App\User;

class TransaksiJalanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksijalan = DB::table('transaksi_poli')
                        ->join('pemeriksaan','transaksi_poli.id_pemeriksaan','=','pemeriksaan.id')
                        ->join('users','transaksi_poli.id_petugas', '=', 'users.id')
                        ->join('pasien','pemeriksaan.id_pasien','=','pasien.id')
                        ->join('poli','pemeriksaan.id_poli','=','poli.id')
                        ->join('tindakan','pemeriksaan.id_tindakan','=','tindakan.id')
                        ->select('pasien.*','pemeriksaan.*','users.*','tindakan.*','poli.*')
                        ->get(); 
        return view('keuangan.transaksijalan',['transaksijalan' => $transaksijalan]);
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
    public function store(Request $request)
    {
        //
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
