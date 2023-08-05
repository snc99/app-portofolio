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
            'deskripsi' => 'required|min:5'
        ],[
            'deskripsi.required' => 'The description field is required',
            'deskripsi.min' => 'The field must contain at least 5 characters'
        ]);

        $data = [
            'deskripsi' => $request->deskripsi
        ];
        about::create($data);
        return redirect('dashboard/about')->with('success', 'About has been successfully added');
    }

    function editAbout($id){
        $data = about::find($id);

        if (!$data) {
            return redirect('dashboard/about')->with('error', 'Data About not found');
        }

        return view('dashboard.viewEditAbout', compact('data'));
    }

    function updateAbout($id, Request $request){
        $request->validate([
            'deskripsi' => 'required|min:5'
        ],[
            'deskripsi.required' => 'The description field is required',
            'deskripsi.min' => 'The field must contain at least 5 characters'
        ]);
        
        $data = about::find($id);

        $data->deskripsi = $request->deskripsi;


        if (!$data->isDirty()) {
            return redirect('dashboard/about')->with('warning', 'No data has been updated');
        }

        if ($data->save()) {
            return redirect('dashboard/about')->with('success', 'About has been successfully updated');
        } else {
            return redirect('dashboard/about')->with('error', 'Failed to update About');
        }
    }

    function deleteAbout($id){
        $data = about::find($id);

        if ($data) {
            $data->delete();
            return redirect('dashboard/about')->with('success', 'About successfully deleted');
        } else {
            return redirect('dashboard/about')->with('error', 'About not found');
        }
    }

}
