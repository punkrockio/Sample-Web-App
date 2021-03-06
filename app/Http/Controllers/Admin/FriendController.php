<?php

namespace App\Http\Controllers\Admin;

use App\Jobs\PostFormFields;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\PostCreateRequest;
use App\Http\Requests\PostUpdateRequest;
use App\Http\Controllers\Controller;
use App\Friend;
use App\User;
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

        $thisUser = Auth::user();
        $users = [];

        foreach(User::where('id', '<>', $thisUser->id)->get() as $user){

            $friend = Friend::where(['user_id'=>$thisUser->id, 'friend_id'=>$user->id])->first();

            if($friend===null)
                array_push($users, $user);

        }

        return view('admin.friend.create')->withUsers($users);
    }

    /**
     * Store a newly created Post
     *
     * @param PostCreateRequest $request
     */
    public function store(Request $request)
    {
        foreach($request->all() as $key => $val){
            
            if($key!=='_token'){

                $friend = new Friend;
                $friend->user_id = Auth::user()->id;
                $friend->friend_id = $key;
                $friend->save();
                
            }

        }

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
    public function destroy($friendId)
    {
        $friend = Friend::where(['user_id' => Auth::user()->id,'friend_id'=>$friendId])->first();
        $friend->delete();

        /*
            return redirect()
            ->route('admin.friend.index')
            ->withSuccess('Friend deleted.');
        */
        return response()->json(['msg'=>'Successfully deleted']);
    }
}