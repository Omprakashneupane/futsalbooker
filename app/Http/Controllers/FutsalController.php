<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Futsal;

class FutsalController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Read

        $data = Futsal::all();
        
        return view('admin.futsals.main',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //CREATE
        return view('admin.futsals.create');
        
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //CREATE
    //    dd($request->all());
        $request->validate([
            'futsal_name' => 'required',
            'owner_name' => 'required',
            'email' => 'required',
            'contact'=>'required',
            'city'=>'required',
            'area'=>'required',
            'price'=>'required'
           
           
        ]);

        if ($file = $request->file('image')) {
            $request->validate([
                'image' =>'mimes:jpg,jpeg,png,bmp'
            ]);
            $image = $request->file('image');
            $imgExt = $image->getClientOriginalExtension();
            $fullname = time().".".$imgExt;
            $result = $image->storeAs('images/futsals',$fullname);
            }
    
            else{
                $fullname = 'image.png';
            }

        $futsals = new Futsal();
        $futsals->futsal_name = $request->futsal_name;
        $futsals->owner_name = $request->owner_name;
        $futsals->price = $request->price;
        $futsals->contact = $request->contact;
        $futsals->email = $request->email;
        $futsals->city = $request->city;
        $futsals->area = $request->area;
        $futsals->image = $fullname;
        $futsals->save();


        if($futsals->save()){
            //Redirect with Flash message
            return redirect('/admin/futsal')->with('status', 'Futsal added Successfully!');
        }
        else{
            return redirect('/admin/futsal/create')->with('status', 'There was an error!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Read individual
        // $posts = Post::find(3)->get();
        $futsals = Futsal::findOrFail($id);
        return view('admin.futsals.show',compact('futsals'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Update View
          
        $futsals = Futsal::where('id',$id)->first();
        return view('admin.futsals.edit',compact('futsals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //Update
        $futsals = Futsal::find($id);


        
        if ($file = $request->file('image')) {
            $request->validate([
                'image' =>'mimes:jpg,jpeg,png,bmp'
            ]);
            $image = $request->file('image');
            $imgExt = $image->getClientOriginalExtension();
            $fullname = time().".".$imgExt;
            $result = $image->storeAs('images/futsals',$fullname);
            }
    
            else{
                $fullname = $futsals->image;
            }

        $futsals->futsal_name = $request->futsal_name;
        $futsals->owner_name = $request->owner_name;
        $futsals->image = $fullname;
        $futsals->contact = $request->contact;
        $futsals->city = $request->city;
        $futsals->price = $request->price;
        $futsals->area = $request->area;
        
        
       

        if($futsals->save()){
            return redirect('/admin/futsal')->with('status', 'Futsal edited Successfully!');
        }
        else{
            return redirect('/admin/futsal/$id/edit')->with('status', 'There was an error');

        }
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete
        $futsals = Futsal::find($id);
        if($futsals->delete()){
            return redirect('/admin/futsal')->with('status', 'Futsal was deleted successfully');
        }
        else return redirect('/admin/futsal')->with('status', 'There was an error');

        
    }
}
