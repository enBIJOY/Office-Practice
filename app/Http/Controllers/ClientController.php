<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create(Request $request){
        $request->validate([
            'name' => 'required',
            'Country'=>'required',
            'email'=>'required|email|unique:clients,email',
            'phone'=>'required',
            'description'=>'nullable|required_with:sub_description'
        ],[
            'description.required_with'=>'This field is MUST'
        ]);
        
        $client = new Client;
        $client->name = $request->name;
        $client->Country = $request->Country;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->description = $request->description;  
        $client->sub_description = $request->sub_description;
        
        if ($request->hasFile('image')) {
          $fileName = uniqid() . '-' . rand() . '.' . $request->file('image')->extension();
          $locaton = public_path('upp');
          $request->file('image')->move($locaton, $fileName);
          $client->image = $fileName;
        }

        $client->save();
        
        if($client){
            return redirect()->route('show')->with('success', 'Client Saved Successfully!');
        }
    }

    public function show(){
        $clients = Client::all();
        return view('show', compact('clients'));
    }

    public function edit($id){
        // dd($request->all);
        $client = Client::find($id);
        return view ('edit', compact('client'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name'=>'required',
            'Country'=>'required',
            'email'=>'required|email|unique:clients,email',
            'phone'=>'required',
            'sub_description'=>'nullable'
        ]);

        $client = Client::find($id);
        $client->name = $request->name;
        $client->Country = $request->Country;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->description = $request->description;
        $client->sub_description = $request->sub_description;

        if ($request->hasFile('image')) {
            $exstingImage=public_path('upp').$client->image;
            if(file_exists($exstingImage)){
                unlink($exstingImage);
            }

          $fileName = uniqid() . '-' . rand() . '.' . $request->file('image')->extension();
          $locaton = public_path('upp');
          $request->file('image')->move($locaton, $fileName);
          $client->image = $fileName;
        }

        $client->save();
        return redirect()->route('show');
    }

    public function clientDelete($id){
        $client = Client::find($id);
        if($client->image){
            $exstingImage=public_path('upp').$client->image;
            if(file_exists($exstingImage)){
                unlink($exstingImage);
            }
        }
        $client->delete();
        return back();
    }
}
