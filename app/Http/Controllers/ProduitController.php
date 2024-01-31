<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\produit;

class produitController extends Controller
{
    public function index()
    {
        $cat = category::all();
        $prds = produit::all();
        return view("Produit", compact(["cat", "prds"]));
    }

    public function store(Request $request)
    {
        $inp = $request->all();
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/Prd_images/', $filename);
            $inp["image"] = $filename;
            produit::create($inp);
        }
        return redirect()->back();
    }

    public function Edit($id)
    {
        $prd = produit::find($id);
        $cat = category::all();
        return view("UpdateProduit", compact(["cat", "prd"]));
    }

    public function Update(Request $request, $id)
    {
        $prd = produit::find($id);
        if ($request->hasFile("image")) {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extenstion;
            $file->move('uploads/Prd_images/', $filename);
            $prd["image"] = $filename;
            $prd->nome = $request->nome;
            $prd->description = $request->description;
            $prd->prix = $request->prix;
            $prd->tags = $request->tags;
            $prd->category_id = $request->category_id;
            $prd->update();
            $cat = category::all();
            $prds = produit::all();
            return view("Produit", compact(["cat", "prds"]));
        } else {
            $prd->nome = $request->nome;
            $prd->description = $request->description;
            $prd->prix = $request->prix;
            $prd->tags = $request->tags;
            $prd->category_id = $request->category_id;
            $prd->update();
            $cat = category::all();
            $prds = produit::all();
            return view("Produit", compact(["cat", "prds"]));
        }
    }


    public function Delete($id)
    {
        $prd = produit::find($id);
        $prd->delete();
        return redirect()->back();
    }
}
