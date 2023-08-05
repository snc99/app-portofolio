<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;
use Illuminate\Support\Facades\File;

class projectController extends Controller
{
    function project(){
        $data = project::all();

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
            'judul' => 'required|min:5',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'deskripsi' => 'required|min:5',
        ],[
            'judul.required' => 'Judulfield is required',
            'judul.min' => 'Judul field must contain at least 5 characters',
            
            'gambar.required' => 'The image field cannot be empty',
            'gambar.img' => 'The file uploaded must be an image',
            'gambar.mimes' => 'Only allow images with extensions jpg, png, and jpeg',
            'gambar.max' => 'The maximum file size allowed is 2 MB',

            'deskripsi.required' => 'Deskripsi field is required',
            'deskripsi.min' => 'Deskripsi field must contain at least 5 characters',
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
        return redirect('dashboard/project')->with('success', 'The project has been successfully added');
    }

    // fungsi untuk edit
    function showEditProject($id){
        $data = project::find($id);

        // dd($data);

        if (!$data) {
            return redirect('dashboard/project')->with('error', 'Data not found');
        }

        return view('dashboard/editProject', compact('data'));
    }

    // fungsi kirim hasil edit
    function updateProject(Request $request, $id){
        $request->validate([
            'judul' => 'required|min:5',
            'deskripsi' => 'required|min:5',
        ],[
            'judul.required' => 'Judul field is required',
            'judul.min' => 'Judul field must contain at least 5 characters',
            'deskripsi.required' => 'Deskripsi field is required',
            'deskripsi.min' => 'Deskripsi field must contain at least 5 characters',
        ]);
    
        $data = [
            'judul' => $request->input('judul'),
            'deskripsi' => $request->input('deskripsi'),
        ];
    
        if ($request->hasFile('gambar')) {
            $request->validate([
                'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            ],[
            'gambar.required' => 'The image field cannot be empty',
            'gambar.img' => 'The file uploaded must be an image',
            'gambar.mimes' => 'Only allow images with extensions jpg, png, and jpeg',
            'gambar.max' => 'The maximum file size allowed is 2 MB',
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
        return redirect('dashboard/project')->with('success', 'Data updated successfully');
    }
    

    function deleteProject($id){
    $data = project::find($id);

    if (!$data) {
        return redirect()->back()->with('error', 'Project not found.');
    }

    // Hapus file gambar jika ada
    if ($data->gambar) {
        File::delete(public_path('img') . '/' . $data->gambar);
    }

    // Hapus data project
    $data->delete();

    return redirect('dashboard/project')->with('success', 'Project successfully deleted');
    }

    
}
