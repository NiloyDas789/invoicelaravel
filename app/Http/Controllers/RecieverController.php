<?php

namespace App\Http\Controllers;

use App\Reciever;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RecieverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recievers=Reciever::orderBy('created_at','DESC')->paginate(10);
        return view('forms.reciever_index', compact('recievers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('forms.create_reciever');
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
            'reciever_name' => 'required',
            'reciever_address' => 'required',
            'reciever_number' => 'required',
            

            
        ]);


            
            $reciever= Reciever::create([
                'reciever_name' =>$request->reciever_name,
                'reciever_address' =>$request->reciever_address,
                'reciever_number' =>$request->reciever_number,
                
                
    
            ]);

        
            

        
        Session::flash('success', 'Reciever Directory Created Successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function show(Reciever $reciever)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function edit(Reciever $reciever)
    {
        return view('forms.edit_reciever',compact('reciever'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reciever $reciever)
    {
        $validated = $request->validate([
            'reciever_name' => 'required',
            'reciever_number' => 'required',
            'reciever_address' => 'required',
            
        ]);

        $reciever->reciever_name =$request->reciever_name;
        $reciever->reciever_number =$request->reciever_number;
        $reciever->reciever_address =$request->reciever_address;
        
        
        $reciever->save();
        
        Session::flash('success', 'Reciever Updated Successfully');
        return redirect()->route('reciever.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reciever  $reciever
     * @return \Illuminate\Http\Response
     */
    public function destroy(Reciever $reciever)
    {
        if($reciever){
            $reciever->delete();

        Session::flash('success', 'Blood Data Deleted Successfully');
        return redirect()->route('reciever.index');
        }
    }
}