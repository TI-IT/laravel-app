<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index () {
        echo "<a href='https://www.youtube.com/watch?v=kQsGK5TNTuw&list=PLd2_Os8Cj3t8pnG4ubQemoqnTwf0VFEtU&index=9'>Lesson</a>";
    }
}
