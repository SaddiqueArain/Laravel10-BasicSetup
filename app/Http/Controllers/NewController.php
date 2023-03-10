<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Writer\Pdf;

//use PhpOffice\PhpSpreadsheet\Writer\Pdf;

class NewController extends Controller
{
    public function index()
    {
        $files=File::query()->get();
        return view('uploadfile',compact('files'));
    }

    public function store(Request $request)
    {
        $request->validate(['agreement' => 'required',
        ]);

        $imageName = '';
        if ($request->agreement) {
            $imageName = time() . '.' . $request->agreement->getClientOriginalExtension();
            $request->agreement->move(public_path('uploads'), $imageName);
        }

        $data=New File();
        $data->agreement = $imageName;
        $data->save();
        return redirect()->route('file.index')->with('success', 'File has been added successfully.');

    }

    public function download(Request $request,$file)
    {

        return response()->download(public_path('uploads/'.$file));
    }


    public function view($id)
    {

        $data=File::find($id);
        return view('view',compact('data'));
    }

}
