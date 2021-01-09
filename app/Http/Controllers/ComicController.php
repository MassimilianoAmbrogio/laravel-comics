<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ComicController extends Controller
{
    /**
     * DETAIL PAGE FOR A COMIC ITEM
     */
    public function show($slug)
    {
        // return 'DETAIL PAGE FOR ID: ' . $id;

        // A
        $comics = config('comics');
        // dd($comics);

        /**
         * Parte 1 Get specific comic by ID
         */
        // A
        // $comic = [];
        // foreach ($comics as $item) {
        //     if($id == $item['id']) {
        //         $comic = $item;
        //     }               
        // }

        /**
         * Parte 2 Get specific comic by slug
         */
        // B
        $comic = [];
        foreach ($comics as $item) {
            // passare da titolo -> slug 
            $titleConverted = Str::slug($item['title'], '-');

            // Decisione se slug conv. e = a quello nella funzione
            if($slug == $titleConverted) {
                $comic = $item;
                break; 
            }
        }

        // Check comic 
        if(empty($comic)) {
            abort(404);
        }

        /**
         * Get specific comic by ID
         */ 
        // B Collections
        // $comic = collect($comics)->firstWhere('id', $id);
        // dd($comic);

        return view('comics.show', compact('comic'));
    }
}
