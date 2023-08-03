<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about;


class aboutController extends Controller
{
    function about(){
        $data = about::first();
        return view('dashboard.about')->with('data', $data);
    }

    function viewAbout(){
        return view('dashboard.viewEditAbout');
    }

    function createAbout(){
        return view('dashboard.createAbout');
    }

    function storeAbout(Request $request){
        $request->validate([
            'deskripsi' => 'required'
        ],[
            'deskripsi.required' => 'Deskripsi tidak boleh kosong!!!'
        ]);

        $data = [
            'deskripsi' => $request->deskripsi
        ];
        about::create($data);
        return redirect('dashboard/about')->with('success', 'Deskripsi berhasl di tambahkan');
    }

    function editAbout($id){
        $data = about::find($id);

        if (!$data) {
            return redirect('dashboard/about')->with('error', 'Data About tidak ditemukan.');
        }

        return view('dashboard.viewEditAbout', compact('data'));
    }

    function updateAbout($id, Request $request){
        $request->validate([
            'deskripsi' => 'required'
        ],[
            'deskripsi.required' => 'Deskripsi tidak boleh kosong'
        ]);
        
        $data = about::find($id);

        $data->deskripsi = $request->deskripsi;


        if (!$data->isDirty()) {
            return redirect('dashboard/about')->with('warning', 'Data tidak ada yang diupdate.');
        }

        if ($data->save()) {
            return redirect('dashboard/about')->with('success', 'Deskripsi berhasil diupdate.');
        } else {
            return redirect('dashboard/about')->with('error', 'Gagal mengupdate deskripsi.');
        }
    }

    function deleteAbout($id){
        $data = about::find($id);

        if ($data) {
            $data->delete();
            return redirect('dashboard/about')->with('success', 'Deskripsi berhasil dihapus');
        } else {
            return redirect('dashboard/about')->with('error', 'Deskripsi tidak ditemukan');
        }
    }

}
