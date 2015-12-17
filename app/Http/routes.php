<?php

// Blog pages
get('/', function () {
    return view('homepage');
    // return redirect('/blog');
});

get('/friend/{id}/post', 'FriendController@getPosts');
resource('/friend', 'FriendController');

get('blog', 'BlogController@index');
get('blog/{slug}', 'BlogController@showPost');
$router->get('contact', 'ContactController@showForm');
Route::post('contact', 'ContactController@sendContactInfo');
get('rss', 'BlogController@rss');
get('sitemap.xml', 'BlogController@siteMap');

// Admin area
get('admin', function () {
    return redirect('/admin/post');
});
$router->group([
    'namespace' => 'Admin',
    'prefix' => 'admin',
    'middleware' => 'auth',
], function () {
    resource('post', 'PostController', ['except' => 'show']);
    resource('tag', 'TagController', ['except' => 'show']);
    resource('friend', 'FriendController', ['except' => 'show']);
    get('upload', 'UploadController@index');
    post('upload/file', 'UploadController@uploadFile');
    delete('upload/file', 'UploadController@deleteFile');
    post('upload/folder', 'UploadController@createFolder');
    delete('upload/folder', 'UploadController@deleteFolder');

    get('user/{id}/post', 'UserController@showArticles');
    resource('user', 'UserController');

    get('cms/{id}/push', 'CmsController@push');
    get('cms/{id}/pull', 'CmsController@pull');
    resource('cms', 'CmsController');
});

// Logging in and out
get('/auth/login', 'Auth\AuthController@getLogin');
post('/auth/login', 'Auth\AuthController@postLogin');
get('/auth/logout', 'Auth\AuthController@getLogout');

get('/auth/register', 'Auth\AuthController@getRegister');
post('/auth/register', 'Auth\AuthController@postRegister');


// resource('api/user/{id}/friend', 'FriendController');
// resource('api/friend', 'FriendController');

$router->group([
    'namespace' =>'Api',
    'prefix' => 'api',
    'middleware' => 'auth.api'
], function(){
    
    get('friend/{id}/post.xml', 'FriendController@showXml');
    resource('user/{id}/friend', 'FriendController');
    resource('friend', 'FriendController');

    get('post/{id}/xml', 'PostController@showXml');
    resource('post', 'PostController');

    post('auth/login', 'AuthController@postLogin');
    post('auth/register', 'AuthController@postRegister');
    resource('user', 'UserController');
});