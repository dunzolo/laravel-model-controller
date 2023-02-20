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
        return view('comics', compact('comics'));
    }

    // metodo che recupera il singolo record
    public function show($id){
        // con il metodo find conviene passare il parametro id
        $comic = Comic::find($id);

        $single_comic = [
            'single_comic' => $comic
        ];
        
        // chiave che andrò a richiamare nella pagina di riferimento nella view
        return view('detail', $single_comic);
    }
}
