<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Auth\SessionGuard;

class categoryController extends Controller
{
    public function Store(Request $request)
    {
        $inp =  $request->all();
        category::create($inp);
        return redirect("/");
    }
    // index,create,store,edit,update,destroy

    public function GetAll()
    {
        $categories = category::paginate(10);
        return view('Category', compact("categories"));
    }

    public function EditView($id)
    {
        $cat = category::find($id);
        return view("UpdateCategory", compact("cat"));
    }

    public function UpdateView(Request $request, $id)
    {
        $cats = category::find($id);
        $cats->nom = $request->input("nom");
        $cats->update();
        $categories = category::all();
        return redirect("/");
    }

    public function Delete($id)
    {
        $cat = category::find($id);
        $cat->delete();
        return redirect()->back();
    }
}
