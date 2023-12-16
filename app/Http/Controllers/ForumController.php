<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Reply;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $posts = Post::with('replies')->get();

        return view('forum.indexpost', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::with('replies')->findOrFail($id);

        return view('forum.show', compact('post'));
    }

    public function create()
    {
        return view('forum.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $validatedData['posted_by'] = auth()->user()->name;

        $post = Post::create($validatedData);

        return redirect()->route('forum.indexpost')->with('success', 'Post created successfully.');
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);

        if (auth()->user()->name === $post->posted_by) {
            return view('forum.edit', compact('post'));
        } else {
            return redirect()->route('forum.show', $id)->with('error', 'You are not authorized to edit this post.');
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        if (auth()->user()->name === $post->posted_by) {
            $post->update($validatedData);
            return redirect()->route('forum.show', $id)->with('success', 'Post updated successfully.');
        } else {
            return redirect()->route('forum.show', $id)->with('error', 'You are not authorized to edit this post.');
        }
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);

        if (auth()->user()->name === $post->posted_by) {
            $post->delete();
            return redirect()->route('forum.indexpost')->with('success', 'Post deleted successfully.');
        } else {
            return redirect()->route('forum.show', $id)->with('error', 'You are not authorized to delete this post.');
        }
    }

    public function editReply($id)
    {
        $reply = Reply::findOrFail($id);

        if (auth()->user()->name === $reply->posted_by) {
            return view('forum.editReply', compact('reply'));
        } else {
            return redirect()->back()->with('error', 'You are not authorized to edit this reply.');
        }
    }

    public function updateReply(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $reply = Reply::findOrFail($id);

        if (auth()->user()->name === $reply->posted_by) {
            $reply->update($validatedData);
            return redirect()->route('forum.show', $reply->post_id)->with('success', 'Reply updated successfully.');
        } else {
            return redirect()->back()->with('error', 'You are not authorized to edit this reply.');
        }
    }

    public function destroyReply($id)
    {
        $reply = Reply::findOrFail($id);

        if (auth()->user()->name === $reply->posted_by) {
            $post_id = $reply->post_id;
            $reply->delete();
            return redirect()->route('forum.show', $post_id)->with('success', 'Reply deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'You are not authorized to delete this reply.');
        }
    }

    public function reply(Request $request, $id)
    {
        $validatedData = $request->validate([
            'content' => 'required',
        ]);

        $post = Post::findOrFail($id);

        $replyData = [
            'content' => $validatedData['content'],
            'posted_by' => auth()->user()->name,
        ];

        $reply = $post->replies()->create($replyData);

        return redirect()->route('forum.show', $post->id)->with('success', 'Reply added successfully.');
    }
}
