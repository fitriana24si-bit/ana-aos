<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD

class PegawaiController extends Controller
{
    //
=======
use Carbon\Carbon;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
 // Data tanggal lahir dan tanggal masuk
        $tanggalLahir = new \DateTime('2006-08-05');
        $tanggalMasuk = new \DateTime('2022-01-10');
        $hariIni = new \DateTime();

        // Menghitung umur secara manual
        $umur = $hariIni->diff($tanggalLahir)->y;

        // Menghitung selisih hari secara manual
        $sejakBerapaHari = $hariIni->diff($tanggalMasuk)->days;

        // Data pegawai yang sudah diperbarui
        $data_pegawai = [
            'nama' => 'Fitriana Tasya',
            'tanggal_lahir' => '17 Agustus 2005',
            'umur' => $umur,
            'hobi' => ['Memasak','Membaca','Bermain musik','Traveling','Menulis'],
            'tanggal_masuk' => '10 Januari 2022',
            'sejak_berapa_hari' => $sejakBerapaHari,
            'semester' => 3,
            'pesan' => 'Masih awal kejar tak',
            'cita-cita' => 'dokter',
            'status' => 'Mahasiswa',
        ];

        // Meneruskan data ke view
        return view('home-pegawai', ['pegawai' => $data_pegawai]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $param1)
    {
      // if($param1 == "detail"){
      //  return view('halaman-mahasiswa-detail');

       //}else if ($param1 == "profile"){
        //return view('halaman-mahasiswa-profile');
       //}
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
>>>>>>> ab97156d028ad89f4243fbe24448744dca2dc85f
}
