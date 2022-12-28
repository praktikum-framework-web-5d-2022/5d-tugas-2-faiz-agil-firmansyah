<?php

namespace App\Http\Controllers;
use App\Models\dosen;


use Illuminate\Support\Facades\DB;

class dosenController extends Controller{
    public function index(){
        $sql = dosen::all();

        return view('layout.dosen', [
            'dosens' => $sql
        ]); 
    }

    public function insertRawSQL(){
        $sql = DB::insert("INSERT INTO dosens (nidn, nama, jenis_kelamin, alamat, tempat_lahir, tanggal_lahir, photo)
        VALUES('170021','Ratna Mufidah','Perempuan','Karawang','Karawang','1980-02-04','Tidak ada')");
        return view('notification.insertDosen');
    }

    public function insertQueryBuilder(){
        $sql = DB::table('dosens')->insert([
            [
                'nidn' => "170022",
                'nama' => "Adhi Rizal",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "1982-02-04",
                'photo' => "Tidak ada"
            ],
            [
                'nidn' => "170023",
                'nama' => "Aji Primajaya",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "1984-03-02",
                'photo' => "Tidak ada"
            ],
            [
                'nidn' => "170024",
                'nama' => "Purwantoro",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "1978-03-06",
                'photo' => "Tidak ada"
            ],
            [
                'nidn' => "170025",
                'nama' => "Arip Solehudin",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "1978-08-12",
                'photo' => "Tidak ada"
            ],
            [
                'nidn' => "170026",
                'nama' => "Iqbal Maulana",
                'jenis_kelamin' => "Laki-laki",
                'alamat' => "Karawang",
                'tempat_lahir' => "Karawang",
                'tanggal_lahir' => "1980-12-11",
                'photo' => "Tidak ada"
            ]
        ]);
        return view('notification.insertDosen');
    }

    public function insertEloquent(){

        dosen::create(
            [
            'nidn' => "170026",
            'nama' => "Iqbal Maulana",
            'jenis_kelamin' => "Laki-laki",
            'alamat' => "Karawang",
            'tempat_lahir' => "Karawang",
            'tanggal_lahir' => "1980-12-11",
            'photo' => "Tidak ada"
            ]
        );
        return view('notification.insertDosen');
    }

    public function updateRawSQL(){
        $sql = DB::update("UPDATE dosens SET nama='Rini Mayasari' WHERE nama=?", ["Ratna Mufidah"]);
        return view('notification.updateDosen');
    }
        
    public function updateQueryBuilder(){
        $sql = DB::table('dosens')
        -> where('nama', 'Iqbal Maulana')
        -> update([
            'photo' => 'Ada foto'
        ]); 
        return view('notification.updateDosen');
    }
     
    public function updateEloquent(){
        dosen::where('alamat', 'Karawang')->update([
            'tempat_lahir' => 'Bekasi'
        ]);
        return view('notification.updateDosen');
    }

    public function selectRawSQL(){
        $sql = DB::select("SELECT * FROM dosens");
        return view('select.dosenRawSQL', [
            'dosens1' => $sql
        ]);
    }

    public function selectQueryBuilder(){
    $sql = DB::table('dosens') -> get();
    return view('select.dosenQueryBuilder', [
        'dosens2' => $sql
    ]);
    }

    public function selectEloquent(){

        $sql = dosen::all();

        return view('select.dosenEloquent', [
            'dosens' => $sql
        ]); 
    }

    public function deleteRawSQL(){
        $sql = DB::delete("DELETE FROM dosens WHERE nama=?", ["Rini Mayasari"]);
        return view('notification.deleteDosen');
    }

    public function deleteQueryBuilder(){    
        $sql = DB::table('dosens')
        ->where('photo', 'Ada Foto')
        ->delete();
        return view('notification.deleteDosen');
    } 
    
    public function deleteEloquent(){    
       $sql = dosen::destroy(2);
       return view('notification.deleteDosen');
    }
}
