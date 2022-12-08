<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Manga;
class MangaController extends Controller
{
    public function index(Request $request)
  {
    $mangas = Manga::all();
 
    return view('index', ['mangas' => $mangas]);
  }
}
