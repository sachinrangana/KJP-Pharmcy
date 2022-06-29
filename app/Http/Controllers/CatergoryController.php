<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\catergory;


class CatergoryController extends Controller
{
    public function test()
    {
        $catergory = catergory::all();
        return view('users.admin.catergory.test',compact(['catergory']));
    }

    public function viewCatergoryByAdmin()
    {
        $catergory = catergory::all();
        return view('users.admin.catergory.catergory',compact(['catergory']));
    }

    public function addNewCatergoryByAdmin(Request $request)
    {
        $catergory = new catergory();
        $catergory->name = $request->input('name');
        $catergory->slug = $request->input('slug');
        $catergory->description = $request->input('description');
        $catergory->status = $request->input('status') == TRUE? '1': '0' ;
        $catergory->popular = $request->input('popular')  == TRUE? '1': '0';
        $catergory->meta_title = $request->input('meta_title');
        $catergory->meta_description = $request->input('meta_description');
        $catergory->meta_keyWords = $request->input('meta_keyWords');
        $catergory->save();
        return redirect()->back()->with('status','Successfully added catergory');

    }

    public function editCatergory($id)
    {
        $catergory = catergory::find($id);
        return view('users.admin.catergory.editCatergory',compact(['catergory']));
    }

    public function updateCatergoryByAdmin(Request $request, $id)
    {
        $catergory = catergory::find($id);
        $catergory->name = $request->input('name');
        $catergory->slug = $request->input('slug');
        $catergory->description = $request->input('description');
        $catergory->status = $request->input('status') == TRUE? '1': '0' ;
        $catergory->popular = $request->input('popular')  == TRUE? '1': '0';
        $catergory->meta_title = $request->input('meta_title');
        $catergory->meta_description = $request->input('meta_description');
        $catergory->meta_keyWords = $request->input('meta_keyWords');
        $catergory->update();
        return redirect ('/viewCatergoryByAdmin')->with('status','Successfully updated');
    }
}
