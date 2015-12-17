<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use App\Friend;
use App\Post;
use App\Table;

use GuzzleHttp\Client;

class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $tables = Table::all();
        return view('admin.cms.index')->withTables($tables);
    }


    public function push($id)
    {
        $table = Table::find($id);
        $url = $table->sheetsu_url;
        $client = new Client;

        $json = [];


        switch ($table->name) {
            case 'users':
                $json = $this->pushUsers($url, $client);
                break;

            case 'posts':
                $json = $this->pushPosts($url, $client);
                break;

            case 'user_friend_pivot':
                $json = $this->pushFriends($url, $client);
                break;
        }

        // $client->post( $url, ['json' => $json[0]]);   

        return redirect($table->google_url);      
    }
    public function pull($id)
    {
        $table = Table::find($id);
        $url = $table->sheetsu_url;
        $client = new Client;
        

        $json = $client->get($url);

        $data = json_decode($json->getBody());

        $goto = '';

        switch ($table->name) {
            case 'users':
                $goto = $this->updateUsers($data->result);
                break;

            case 'posts':
                $goto = $this->updatePosts($data->result);
                break;

            case 'user_friend_pivot':
                $goto = $this->updateFriends($data->result);
                break;
        }


        return redirect($goto);         
    }



    private function updateUsers($data)
    {
        foreach($data as $row){

            $user = User::firstOrNew(['id'=>$row->id]);
            $user->name = $row->name;
            $user->email = $row->email;
            $user->thumb_url = $row->thumb_url;
            $user->about = $row->about;
            $user->phone = $row->phone;
            $user->facebook = $row->facebook;
            $user->save();
        }

        return '/admin/user';

    }

    private function pushUsers($url, $client)
    {

        foreach(User::all() as $user){
            $json = [
                'id'        =>$user->id,
                'name'      =>$user->name,
                'email'     =>$user->email,
                'thumb_url' =>$user->thumb_url,
                'about'     =>$user->about,
                'phone'     =>$user->phone,
                'facebook'  =>$user->facebook
            ];

            $client->post( $url, ['json' => $json]); 

        }

    }

    private function updatePosts($data)
    {
        foreach($data as $row){

            $post = Post::firstOrNew(['id'=>$row->id]);
            $post->authour_id = $row->authour_id;
            $post->slug = $row->slug;
            $post->title = $row->title;
            $post->subtitle = $row->subtitle;
            $post->content_raw = $row->content_raw;
            $post->content_html = $row->content_html;
            $post->page_image = $row->page_image;
            $post->meta_description = $row->meta_description;
            $post->is_draft = $row->is_draft;
            $post->layout = $row->layout;
            // $post->published_at = $row->published_at;
            $post->thumb_url = $row->thumb_url;
            $post->save();
            
        }
        return '/admin/post';
        
    }

    private function pushPosts($url, $client)
    {
        

        foreach(Post::all() as $post){

            $json =  [
                'id'  =>$post->id,
                'authour_id'  =>$post->authour_id,
                'slug'  =>$post->slug ,
                'title'  =>$post->title ,
                'subtitle'  =>$post->subtitle ,
                'content_raw'  =>$post->content_raw,
                'content_html'  =>$post->content_html,
                'page_image'  =>$post->page_image ,
                'meta_description'  =>$post->meta_description ,
                'is_draft'  =>$post->is_draft ,
                'layout'  =>$post->layout ,
                'published_at'  =>$post->published_at ,
                'thumb_url'  =>$post->thumb_url 
            ];

            $client->post( $url, ['json' => $json]); 
        }
        
    }

    private function updateFriends($data)
    {
        foreach($data as $row){

            $friend = Friend::firstOrNew(['id'=>$row->id]);
            $friend->user_id = $row->user_id;
            $friend->friend_id = $row->friend_id;
            
            $friend->save();
        }

        return '/admin/friend';

    }

    private function pushFriends($url, $client)
    {

        foreach(Friend::all() as $friend){
            $json = [
                'id'=> $friend->id,
                'user_id'=> $friend->user_id,
                'friend_id'=> $friend->friend_id
            ];

            $client->post( $url, ['json' => $json]); 
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
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

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        
    }
}
