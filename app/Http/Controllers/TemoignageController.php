<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostDec;

class TemoignageController extends Controller
{
    public function creer(Request $request)
    {
        $id = Auth::user();
        Temoignage::create([
            'users_id' => $id->id,
            'text' => $request->text,
        ]);
        return redirect(route("temoignage"));
    }
    public function montrer()
    {
        $temoignages = Temoignage::latest()->get();
        return view("temoignage", compact("temoignages"));
    }
    public function edit($temoignage) {
        return view("modifier", compact("temoignage"));
    }
    public function modifier(Request $request, Temoignage $temoignage)
    {
        $temoignage->update(['text' => $request->text]);
        return redirect(route("temoignage"));
    }
    public function supprimer(Temoignage $temoignage)
    {
        $temoignage->delete();
        return redirect('/temoignage');
    }

}
