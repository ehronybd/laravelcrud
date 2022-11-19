<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\crud;
use Session;

class crudcontroller extends Controller
{
      public function view(){

      //$showData = crud::all();
      $showData = crud::paginate(5);
      return view('view' ,compact('showData'));

    return view ('view');

    }
     public function add(){

    return view ('add');

    }
      public function storeData(Request $request){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',

        ];
        $cm=[
            'name.required'=>'Name Must be Include',
            'name.max'=>'Name Lenth Less Then 10 Charecter',
            'email.required'=>'Email Must be Include',
            'email.email'=>'please  input validate email',
        ];

        $this->validate($request ,$rules ,$cm);
        $savedata = new crud();
        $savedata->name=$request->name;
        $savedata->email=$request->email;
        $savedata->save();
        Session::flash('msg','Data insert Successfully');
        return redirect('/');

    }

    public function editView($id=null){
        $data =crud::find($id);
    return view('dataview',compact('data'));
    }

   
      public function editData(Request $request,$id){
        $rules=[
            'name'=>'required|max:10',
            'email'=>'required|email',

        ];
        $cm=[
            'name.required'=>'Name Must be Include',
            'name.max'=>'Name Lenth Less Then 10 Charecter',
            'email.required'=>'Email Must be Include',
            'email.email'=>'please  input validate email',
        ];

        $this->validate($request ,$rules ,$cm);
        $savedata = crud::find($id);
        $savedata->name=$request->name;
        $savedata->email=$request->email;
        $savedata->save();
        Session::flash('msg','Data Update Successfully');
        return redirect('/');

    }

    public function deleteData($id=null){
        $deletedata = crud::find($id);
        $deletedata->delete();
         Session::flash('msg','Data Delete Successfully');
        return redirect('/');
    }

}
