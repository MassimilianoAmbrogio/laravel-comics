<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index() 
    {
        // return 'HOMEPAGE';

        // Get comics list
        $comics = config('comics');
        // dd($comics);

        // Gen slugs for comics url (friendly url)

        // HOW
        // $slug = Str::slug('Ciao classe 19', '-');
        // dd($slug);

        foreach ($comics as $key => $comic) {
            // A passare da titolo -> slug
            $slug = Str::slug($comic['title'], '-');
            // Add slug elements in array(comics)
            $comics[$key]['slug'] = $slug;
        }
        // dd($comics);

        return view('home', compact('comics'));
    }
}
