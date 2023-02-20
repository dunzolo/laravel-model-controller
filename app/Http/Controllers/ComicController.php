<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    ///metodo che mostra tutti i record
    public function index(){
        $comics = Comic::all();
        //devo indicare il nome della view
        return view('home', compact('comics'));
    }
}
