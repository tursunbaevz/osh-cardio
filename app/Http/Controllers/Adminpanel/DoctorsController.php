<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// for calling doctor model
use App\Doctor;
// this for using FILE path
use File;

class DoctorsController extends Controller
{
    public function index() {
    	$doctors = Doctor::all();
    	return view('admin/doctors.index', compact('doctors'));
    }

    public function create() {
    	return view('admin/doctors.create');
    }



    public function store(Request $request) {
        // validation
        $this->validate($request, [
            'name' => 'required',
            'doctors_image' => 'image|max:1999'
        ]);
        //get file name  with extention
        $filenameWithExt = $request->file('doctors_image')->getClientOriginalName();
        // get just the filename
        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
        // get extension
        $extension = $request->file('doctors_image')->getClientOriginalExtension();
        //create new filename
        $filenameToStore = $filename.'_'.time().'.'.$extension;
        // upload image
        $path = $request->file('doctors_image')->storeAs('storage/doctors_image', $filenameToStore);

        // create doctors

        $doctor = new Doctor;

        $doctor->name = $request->input('name');
        $doctor->body = $request->input('body');
        $doctor->doctors_image = $filenameToStore;
        $doctor->save();

        return redirect('/adminpanel/dashboard/doctors')->with('success', 'Страница врача создана!');

    }


    public function edit($id) {
        $doctor = Doctor::find($id);
        return view('admin/doctors.edit', compact('doctor'));
    }


    public function update(Request $request, $id) {
        // find id
        $doctor = Doctor::find($id);



        $doctor->name = $request->input('name');
        $doctor->body = $request->input('body');

        $this->validate($request, [
            'name' => 'required',
            'doctors_image' => 'image|max:1999'
        ]);
        if($request->hasFile('doctors_image')) {
            //get file name  with extention
            $filenameWithExt = $request->file('doctors_image')->getClientOriginalName();
            // get just the filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // get extension
            $extension = $request->file('doctors_image')->getClientOriginalExtension();
            //create new filename
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            // upload image
            $path = $request->file('doctors_image')->storeAs('storage/doctors_image', $filenameToStore);

            // проверка на существование
            if (File::exists('storage/doctors_image/' . $doctor->doctors_image)) {
                // удаляет фото в файле
                File::delete('storage/doctors_image/' . $doctor->doctors_image);
            }


            // update doctors
            // заменяет фото в базе
            $doctor->doctors_image = $filenameToStore;
        }
        $doctor->save();

        return redirect('/adminpanel/dashboard/doctors/')->with('success', 'Вы успешно обновили страницу врачей!');

    }





    // удаление доктора
    public function destroy(Request $request){
        // проверка на реквест id
        if(isset($request->id)){

            $doctor = Doctor::findOrFail($request->id);
            // проверка на существование превьюшки альбома
            if(File::exists('storage/doctors_image' . '/' . $doctor->doctors_image))
            {
                // удаляет превьюшку доктора
                File::delete('storage/doctors_image' . '/' . $doctor->doctors_image);
                // удаляет доктора с базы
                $doctor->delete();
            }
        }

    }
}
