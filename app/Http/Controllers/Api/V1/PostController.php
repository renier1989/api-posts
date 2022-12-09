<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\V1\PostResource;

class PostController extends Controller
{

    public function index()
    {
        return PostResource::collection(Post::latest()->paginate(2));
    }

    public function pruebas(){
        $coll = [
            'id' => '123',
            'nombre' => 'renier',
            'ciudad' => 'Peru',
        ];
        return response()->json($coll);
    }

    public function show(Post $post)
    {
        // return $post;
        return new PostResource($post);
    }

    public function destroy(Post $post)
    {
        try {
            // $post->delete();
            /** con esta linea puedo retornar la respuesta que estoy especificando en el mensaje */
            return response()->json(['message' => 'El Post fue elimindao con exito']);
            
            /** con esta linea puedo agregandole el estado de la respuesta 204, no muestro el mensaje pero estoy indicando
             * que la operacion se ejecuto con exito
             */
            // return response()->json(['message' => 'El Post fue elimindao con exito'],204);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);        
        }
    }
}
