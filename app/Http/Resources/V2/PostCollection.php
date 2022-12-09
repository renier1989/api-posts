<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{

    /** con este metodo me aseguro de que los datos se presenten segun la configuracion de cada recurso individual */
    public $collects = PostResource::class;

    public function toArray($request)
    {
        return [
            'data' => $this->collection,
            'meta' => [
                'organization' => 'Renier Vargas',
                'authors' => [
                    'Renier Vargas',
                    'Curso de Platzi'
                ],
            ],
            'type' => 'articles',
        ];
    }
}
