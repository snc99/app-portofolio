<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Support\Facades\File;

class projectController extends Controller
{
    function project(){
        $data = project::all();

        // foreach ($data as $item){
        //     $item->short_description = substr($item->deskripsi, 0, 100) . '...';
        // }

        return view('dashboard.project')->with('data', $data);
    }

    function editProject(){
        return view('dashboard.editProject');
    }

    function createProject(){
        return view('dashboard.createProject');
    }

    function storeProject(Request $request){
        $request->validate([
            'judul' => 'required',
            'gambar' => 'required|mimes:jpg,jpeg,png',
            'deskripsi' => 'required',
        ],[
            'judul.required' => 'Judul tidak boleh kosong',
            'gambar.required' => 'Foto tidak boleh kosong',
            'gambar.mimes' => 'Format gambar tidak di perbolehkan',
            'deskripsi.required' => 'Deskripsi wajib di isi',
        ]);

        $fileGambar = $request->file('gambar');
        $getExtension = $fileGambar->extension();
        $renameGambar = date('ymdhis') . '.' . $getExtension;
        $fileGambar->move(public_path('img'), $renameGambar);

        $data = [
            'judul' => $request->input('judul'),
            'gambar' => $renameGambar,
            'deskripsi' => $request->input('deskripsi')
        ];
        project::create($data);
        return redirect('dashboard/project')->with('success', 'Deskripsi berhasl di tambahkan');
    }

    // fungsi untuk edit
    function showEditProject($id){
        $data = project::find($id);

        // dd($data);

        if (!$data) {
            return redirect('dashboard/project')->with('error', 'Data About tidak ditemukan.');
        }

        return view('dashboard/editProject', compact('data'));
    }

    // fungsi kirim hasil edit
    function updateProject(Request $request, $id){
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'required',
        ],[
            'judul.required' => 'Judul tidak boleh kosong',
            'deskripsi.required' => 'Deskripsi wajib di isi',
        ]);
    
        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
        ];
    
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|mimes:jpg,jpeg,png',
            ],[
                'gambar.required' => 'Foto tidak boleh kosong',
                'gambar.mimes' => 'Format gambar tidak di perbolehkan',
            ]);
    
            $fileGambar = $request->file('gambar');
            $getExtension = $fileGambar->extension();
            $renameGambar = date('ymdhis') . '.' . $getExtension;
            $fileGambar->move(public_path('img'), $renameGambar);
    
            $getGambar = project::find($id);
    
            // Hapus gambar lama jika ditemukan
            if ($getGambar && file_exists(public_path('img') . '/' . $getGambar->gambar)) {
                File::delete(public_path('img') . '/' . $getGambar->gambar);
            }
    
            $data['gambar'] = $renameGambar;
        }
    
        project::where('id', $id)->update($data);
        return redirect('dashboard/project')->with('success', 'data berhasil di update');
    }
    

    function deleteProject($id){
        $data = project::where('gambar', $id)->first();
        File::delete(public_path('img') . '/' . $data->gambar);

        project::where('gambar', $id)->delete();
        return redirect('dashboard/project')->with('success', 'Data berhasil di hapus');
    }

    
}
