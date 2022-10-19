<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\mahasiswa;


class mahasiswaController extends Controller
{
    public function index(){
        $sql = mahasiswa::all();

        return view('layout.mahasiswa', [
            'mahasiswas' => $sql
        ]); 
    }

    public function insertRawSQL(){
        $sql = DB::insert("INSERT INTO mahasiswas (npm, nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, photo)
        VALUES('20067','Faiz Agil Firmansyah','Laki-laki','Bekasi','Bekasi','2002-12-16','ada foto')");

        return view('notification.insertMahasiswa');
    }

    public function insertQueryBuilder(){
        $sql = DB::table('mahasiswas')->insert([
            [
                'npm' => "20075",
                'nama' => "Fathimatuz Zahra",
                'jenis_kelamin' => "Perempuan",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "2002-09-17",
                'photo' => "Tidak ada"
            ],
            [
                'npm' => "20068",
                'nama' => "Arfan Ryo D",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Bekasi",
                'tempat_lahir' => "Bekasi",
                'tanggal_lahir' => "2002-07-10",
                'photo' => "Tidak ada"
            ],
            [
                'npm' => "20069",
                'nama' => "Cahya Diantoni",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Cikarang",
                'tempat_lahir' => "Cikarang",
                'tanggal_lahir' => "2002-03-16",
                'photo' => "Tidak ada"
            ],
            [
                'npm' => "20070",
                'nama' => "Diki Candra",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Bogor",
                'tanggal_lahir' => "2001-04-12",
                'photo' => "Tidak ada"
            ],
            [
                'npm' => "20071",
                'nama' => "Irna Purhasanah",
                'jenis_kelamin' => "Perempuan",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "2002-10-09",
                'photo' => "Tidak ada"
            ]
        ]);
        return view('notification.insertMahasiswa');
    }

    public function insertEloquent(){

        mahasiswa::create(
            [
            'npm' => "20073",
            'nama' => "Assyifa Khalif",
            'jenis_kelamin' => "Laki-laki",
            'alamat' => "Karawang",
            'tempat_lahir' => "Karawang",
            'tanggal_lahir' => "2002-02-19",
            'photo' => "Tidak ada"
            ]
        );
        return view('notification.insertMahasiswa');
    }

    public function updateRawSQL(){
        $sql = DB::update("UPDATE mahasiswas SET nama='Faiz' WHERE nama=?", ["Faiz Agil Firmansyah"]);
        return view('notification.updateMahasiswa');
    }
        
    public function updateQueryBuilder(){
        $sql = DB::table('mahasiswas')
        -> where('nama', 'Arfan Ryo D')
        -> update([
            'photo' => 'Ada foto'
        ]); 
        return view('notification.updateMahasiswa');
    }
     
    public function updateEloquent(){
        mahasiswa::where('alamat', 'Karawang')->update([
            'tempat_lahir' => 'Bogor'
        ]);
        return view('notification.updateMahasiswa');
    }

    public function selectRawSQL(){
        $sql = DB::select("SELECT * FROM mahasiswas");
        return view('select.mahasiswaRawSQL', [
            'mahasiswas1' => $sql
        ]);
    }

    public function selectQueryBuilder(){
    $sql = DB::table('mahasiswas') -> get();
    return view('select.mahasiswaQueryBuilder', [
        'mahasiswas2' => $sql
    ]);
    }

    public function selectEloquent(){

        $sql = mahasiswa::all();

        return view('select.mahasiswaEloquent', [
            'mahasiswas' => $sql
        ]); 
    }

    public function deleteRawSQL(){
        $sql = DB::delete("DELETE FROM mahasiswas WHERE nama=?", ["Cahya Diantoni"]);
        return view('notification.deleteMahasiswa');
    }

    public function deleteQueryBuilder(){    
        $sql = DB::table('mahasiswas')
        ->where('photo', 'Ada foto')
        ->delete();
        return view('notification.deleteMahasiswa');
    } 
    
    public function deleteEloquent(){    
       $sql = mahasiswa::destroy(6);
       return view('notification.deleteMahasiswa');
    }
}
