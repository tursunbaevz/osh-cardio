<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

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

        $service->save();

        return redirect('/adminpanel/dashboard/services');

    }

    								/*========== DESTROY ==========*/

        public function destroy(Request $request){
 
            if(isset($request->id)){
                $service = Service::findOrFail($request->id);
                $service->delete();
            }

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

            $service->save();

            return redirect('/adminpanel/dashboard/services')->with('success','Service has been updated');

        }


        public function edit($id){
            $service = Service::find($id);
            return view('admin/service.edit', compact('service'));
        }


}