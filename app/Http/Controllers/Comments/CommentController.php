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
        $serviceId = (int)$request->serviceId;
        $this->validate($request,[
            "comment" => 'required|max:1000'
        ],
        [
            "required" => 'The reply field cannot be empty'
        ]

        );

        $service = Service::find($serviceId);

        if(!$service){
            return redirect()->route('home');
        }

        $comment = new Comment;

        $comment->body = $request->comment;

        $comment->user()->associate($request->user());

        $service->comments()->save($comment);

        return redirect()->back();


    }
}