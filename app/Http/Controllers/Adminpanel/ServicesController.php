<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;
use Image;
use File;

class ServicesController extends Controller
{
    public function index(){
  		$services = Service::all();
    	return view('admin/service.index', compact('services'));
    }

    public function create(){
    	return view('admin/service.create');
    }


    								/*========== STORE ==========*/

    public function store(Request $request){
        
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $service = new Service;
 
        $service->title = $request->title;
        $service->body = $request->body;

        if($request->hasFile('feautured_image')){
            $image_service = $request->file('feautured_image');
            $image_grid = $request->file('feautured_image');

            $filename_service = time() . '.' . $image_service->getClientOriginalExtension();
            $filename_grid = time() . '.' . $image_grid->getClientOriginalExtension();

            $location_service = public_path('img/thumbnail/services/'.$filename_service);
            $location_grid = public_path('img/thumbnail/services/grid/'.$filename_grid);

            Image::make($image_service)->fit(1920, 350)->save($location_service);
            Image::make($image_grid)->fit(350, 430)->save($location_grid);

            $service->image = $filename_service;
            $service->imageGrid = $filename_grid;
        }


        $service->save();

        return redirect('/adminpanel/dashboard/services');

    }


                                    /*========== UPDATE ==========*/

        public function update(Request $request, $id){

            $service = Service::find($id);
        
            $this->validate(request(), [
                'title' => 'required',
                'body' => 'required'
            ]);
            
            $service->title = $request->get('title');
            $service->body = $request->get('body');


            //Update image
            if($request->hasFile('feautured_image')){
                $image_service = $request->file('feautured_image');
                $image_grid = $request->file('feautured_image');

                $filename_service = time() . '.' . $image_service->getClientOriginalExtension();
                $filename_grid = time() . '.' . $image_grid->getClientOriginalExtension();

                $location_service = public_path('img/thumbnail/services/'.$filename_service);
                $location_grid = public_path('img/thumbnail/services/grid/'.$filename_grid);


                if(File::exists('img/thumbnail/services/' . $service->image)){

                    File::delete('img/thumbnail/services/' . $service->image);
                    File::delete('img/thumbnail/services/grid/' . $service->image);

                }else{
                    $service->image = $filename_service;
                    $service->imageGrid = $filename_grid;
                }
     
                $service->image = $filename_service;
                $service->imageGrid = $filename_grid;
     
                Image::make($image_service)->fit(1920, 350)->save($location_service);
                Image::make($image_grid)->fit(350, 430)->save($location_grid); 
            }

            $service->save();

            return redirect('/adminpanel/dashboard/services')->with('success','Service has been updated');

        }


        public function edit($id){
            $service = Service::find($id);
            return view('admin/service.edit', compact('service'));
        }


                                /*========== DESTROY ==========*/

        public function destroy(Request $request){
 
            if(isset($request->id)){
                $service = Service::findOrFail($request->id);

                if(File::exists('img/thumbnail/services/' . $service->image)){

                    File::delete('img/thumbnail/services/' . $service->image);
                    File::delete('img/thumbnail/services/grid/' . $service->image);

                    $service->delete();
                }

                $service->delete();
            }

        }




}