<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCommentRequest;
use App\Post;
use App\Comment;
use App\Mail\CommentReceived;


class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function store($postId)
    {
        $post = Post::findOrFail($postId);

        // $request->validate([
        //     'author'=> 'required|max:5',
        //     'text' => 'required|min:30'
        // ]);
     
        $this->validate(request(), Comment::STORE_RULES);

        $comment = $post->comments()->create(request()->all());

        // return $comment;

        if ($post->user) {
            \Mail::to($post->user)->send(new CommentReceived(
                $post, $comment
            ));
        }
        return redirect(route('posts.show', [ 'id' => $postId ]));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
