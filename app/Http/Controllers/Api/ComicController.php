<?php

namespace App\Http\Controllers\Api;

use App\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index(){

      $comics = Comic::all();
      /* file JSON da richiamare con Axios */
      return response()->json($comics);

    }
}
