<?php

namespace App\Http\Controllers;

use App\Shipper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShipperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shippers=Shipper::orderBy('created_at','DESC')->paginate(10);
        return view('forms.shipper_index', compact('shippers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create_shipper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $validated = $request->validate([
            'shipper_name' => 'required',
            'shipper_address' => 'required',
            'shipper_number' => 'required',
            

            
        ]);


            
            $shipper= Shipper::create([
                'shipper_name' =>$request->shipper_name,
                'shipper_address' =>$request->shipper_address,
                'shipper_number' =>$request->shipper_number,
                
                
    
            ]);

        
            

        
        Session::flash('success', 'Shipper Directory Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function show(Shipper $shipper)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipper $shipper)
    {
        return view('forms.edit_shipper',compact('shipper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipper $shipper)
    {
        $validated = $request->validate([
            'shipper_name' => 'required',
            'shipper_number' => 'required',
            'shipper_address' => 'required',
            
        ]);

        $shipper->shipper_name =$request->shipper_name;
        $shipper->shipper_number =$request->shipper_number;
        $shipper->shipper_address =$request->shipper_address;
        
        
        $shipper->save();
        
        Session::flash('success', 'Shipper Updated Successfully');
        return redirect()->route('shipper.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipper  $shipper
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipper $shipper)
    {
        if($shipper){
            $shipper->delete();

        Session::flash('success', 'Blood Data Deleted Successfully');
        return redirect()->route('shipper.index');
        }
    }
}
