<?php
namespace App\Http\Controllers\Comments;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Service;
use App\Comment;


Class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware(['AuthCheck']);
    }


    public function store(Request $request)
    {
        dd($request);
    }
}