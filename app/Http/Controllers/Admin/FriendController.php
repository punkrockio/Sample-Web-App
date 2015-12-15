<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\PostFormFields;
use App\Http\Requests;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use App\Friend;
use Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the posts.
     */
    public function index()
    {
        $friends = Friend::where('user_id', Auth::user()->id)->get();

        return view('admin.friend.index')
            ->withFriends($friends);
    }

    /**
     * Show the new post form
     */
    public function create()
    {
        $data = $this->dispatch(new PostFormFields());

        return view('admin.friend.create', $data);
    }

    /**
     * Store a newly created Post
     *
     * @param PostCreateRequest $request
     */
    public function store(PostCreateRequest $request)
    {
        $friend = Friend::create($request->postFillData());

        return redirect()
            ->route('admin.friend.index')
            ->withSuccess('New Connection Successfully Created.');
    }

    /**
     * Show the post edit form
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $data = $this->dispatch(new PostFormFields($id));

        return view('admin.friend.edit', $data);
    }

    /**
     * Update the Post
     *
     * @param PostUpdateRequest $request
     * @param int  $id
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $friend = Post::findOrFail($id);
        $friend->fill($request->postFillData());
        $friend->save();
        

        if ($request->action === 'continue') {
            return redirect()
                ->back()
                ->withSuccess('Post saved.');
        }

        return redirect()
            ->route('admin.friend.index')
            ->withSuccess('Friend saved.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $friend = Friend::findOrFail($id);
        // $friend->tags()->detach();
        $friend->delete();

        return redirect()
            ->route('admin.friend.index')
            ->withSuccess('Friend deleted.');
    }
}