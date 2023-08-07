<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class skillController extends Controller
{
    function skill(){
        $data = skill::all();

        return view('dashboard.skill')->with('data', $data);
    }

    function editSkill(){
        return view('dashboard.editSkill');
    }

    function createSkill(){
        return view('dashboard.createSkill');
    }
    
    function storeSkill(Request $request){
        $request->validate([
            'nama' => 'required|min:2',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ],[
            'nama.required' => 'Field judul is required',
            'nama.min' => 'Field judul must contain at least 2 characters',

            'gambar.required' => 'The image field cannot be empty',
            'gambar.image' => 'The file uploaded must be an image',
            'gambar.mimes' => 'Only allow images with extension JPG, PNG, and JPEG',
            'gambar.max' => 'The maximum file size allowed is 2 MB',
        ]);

        if ($request->file('gambar')) {
            $validateData['gambar'] = $request->file('gambar')->store('img');
        }
        

        $data = [
            'nama' => $request->input('nama'),
            'gambar' => $validateData['gambar']
        ];

        skill::create($data);
        return redirect('dashboard/skill')->with('success', 'The skill has been successfuly');
    }

    function showEditSkill($id){

    }

    function updateSkill(Request $request, $id){

    }

    function deleteSkill($id){
        $data = skill::find($id);

        if (!$data) {
            return redirect('dashboard/skill')->with('error', 'Skill not found');
        }

        if ($data->gambar) {
            // Menghapus gambar dari direktori storage/img
            Storage::delete($data->gambar);
        }

        $data->delete();
        return redirect('dashboard/skill')->with('success', 'Skill successfully deleted');
    }
}
