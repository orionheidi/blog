<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Http\Requests\CreateCommentRequest;
use App\Mail\CommentReceived;

class PostController extends Controller
{

    public function __construct(){
        $this->middleware('auth',['only' =>['create','store']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        // $posts = Post::all();
        // return view('posts.index',['abc'=>$posts]);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'body' =>'required'
        ]);

        Post::create(
            array_merge(
                $request->all(),
                ['user_id'=> auth()->user()->id]
            )
        );

        // return redirect('/posts');

        return redirect(route('posts.index'));
        // Post::create([
        //     'title'=> $request->title,
        //     'body'=> $request->body]);
        //  \Log::info(print_r($request->all(),true));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        // $post = Post::findOrFail($id);
        // \Log::info($id);
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();

        return view('posts.index',compact('posts'));
    }

    // public function addComment(CreateCommentRequest $request,$id)
    // {
    //     $request->validate([
    //         'author'=> 'required|max:5',
    //         'text' => 'required|min:30'
    //     ]);

    //     // $comment = $post->comments()->create(request()->all());
    //     $comment = Comment::create([
    //         'post_id' => $id,
    //         'author' => $request->author,
    //         'text' => $request->text
    //     ]);

    //     if($comment->post->user){
    //     \Mail::to($this->post->user)->send(new CommentReceived(
    //         $comment->post,$comment
    //     ));

    // }
    //     return redirect()
    //     ->back();

    //     // Post::findOrFail($id)
    //     // ->addComments
    //     // ->create($request->all());
    // }
}
