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

  public function createForm(Request $request)
  {
    return view('create_manga');
  }

  public function create(Request $request)
  {
    $manga = new Manga;
    $manga->name = $request->input('name');
    $manga->author = $request->input('author');
    $manga->publisher = $request->input('publisher');
    $manga->description = $request->input('description');
    $manga->save();
    return redirect('/index');
  }
}
