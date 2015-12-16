<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Friend;
use App\User;
use App\Post;
use Auth;

class FriendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($id=false)
    {

        if(!$id){
            $id = Auth::user()->id; 
        }

        $pivots = Friend::where('user_id', $id)->get();
        $friends =[]; 
        foreach($pivots as $pivot){

            $friend = User::find($pivot->friend_id);

            $json = [
                'id' => $friend->id,
                'name' => $friend->name,
                'email' => $friend->email,
                'thumb_url' => $friend->thumb_url,
                'about' => $friend->about,
                'posts' => Post::where('authour_id', $friend->id)->get()

            ];

            array_push($friends, $json);
        }

        return response()->json($friends);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $friend = User::find($id);
        $json = [
                'id' => $friend->id,
                'name' => $friend->name,
                'email' => $friend->email,
                'thumb_url' => $friend->thumb_url,
                'about' => $friend->about,
                'posts' => Post::where('authour_id', $friend->id)->get()

            ];

        return response()->json($json);

    }


    public function showXml($userId)
    {
        $posts = Post::where('authour_id', $userId)->get();
        return response()->view('friend.xml', ['posts'=>$posts])->header('Content-Type', 'text/xml');;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
