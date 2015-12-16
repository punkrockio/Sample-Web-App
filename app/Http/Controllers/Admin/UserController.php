<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Post;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.index')->withUsers($users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $photoUrl = '';
        if ($request->hasFile('photo')) {
            
            $photo = $request->file('photo');
            $destinationPath = public_path().'/uploads/user/';
            $filename = $photo->getClientOriginalName();
            $photo->move($destinationPath, $filename);
            $photoUrl = '/uploads/user/'.$filename;
        }

        $user = new User;
        $user->thumb_url = $photoUrl;
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->about = $request->about;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->save();
        
        return redirect('/admin/user/'.$user->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('admin.user.show')->withUser($user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function showArticles($id)
    {
        $user = User::find($id);
        $posts = $user->posts;
        return view('admin.post.index')->withPosts($posts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        return $this->show($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {

        $user = User::find($id);

        if ($request->hasFile('photo')) {
            
            $photo = $request->file('photo');
            $destinationPath = public_path().'/uploads/user/';
            $filename = $photo->getClientOriginalName();
            $photo->move($destinationPath, $filename);
            $photoUrl = '/uploads/user/'.$filename;
            $user->thumb_url = $photoUrl;
        }

        $user->name = $request->name;

        if($request->has('password'))
            $user->password = bcrypt($request->password);
        
        $user->about = $request->about;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->facebook = $request->facebook;
        $user->save();
        
        return redirect('/admin/user/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        foreach(Post::where('authour_id', $id)->get() as $post){
            $post->delete();
        }

        $user->delete();
    }
}
