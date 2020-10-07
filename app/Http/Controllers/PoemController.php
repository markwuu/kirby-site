<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Poem;

class PoemController extends Controller
{
    public function show(Poem $poem){
        return view('poems.show', ['poem' => $poem]);
    }
}
