<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Guest;

class GuestController extends Controller
{
    //

    public function get(){
        $guests = Guest::all();

        return view('guest-view', compact('guests'));

    }

    public function getAdminView(){
        $guests = Guest::all();

        return view('admin-view', compact('guests'));

    }

    public function updateView($id){
        $guests = Guest::find($id);

        return view('edit-guest', compact('guests'));
    }

    public function update(Request $request, $id){
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'email' => 'string',
            'address' => 'string'
        ]);

        $data = Guest::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->save();

        return redirect('/admin/view');
    }

    public function insert(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'string',
            'email' => 'string',
            'address' => 'string'
        ]);

        $data = new Guest($request->all());
        $data->save();

        return redirect('/success');

    }


    public function delete($id)
    {
        $data = Guest::find($id);
        $data->delete();
        
        return redirect()->back();
    }
    
}
