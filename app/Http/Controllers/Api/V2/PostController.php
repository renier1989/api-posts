<?php

namespace App\Http\Controllers\Api\V2;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

use App\Http\Resources\V2\PostResource;
use App\Http\Resources\V2\PostCollection;

class PostController extends Controller
{

    public function index()
    {
        return new PostCollection(Post::latest()->paginate());
    }


    public function show(Post $post)
    {
        return new PostResource($post);
    }


}
