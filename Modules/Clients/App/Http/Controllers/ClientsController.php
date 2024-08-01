<?php

namespace Modules\Clients\App\Http\Controllers;

use Modules\Clients\App\Http\Resources\ClientsResource;
use Lynx\Base\Api;
use Modules\Clients\App\Models\Client;

class ClientsController extends Api
{
    protected $entity = Client::class;
    protected $resourcesJson = ClientsResource::class ;

    public function rules($type, int $id = null): array
    {

        return $type == 'store' ?
            // store Rules
            [
                'title' => 'required|string',
                'desc' => 'required|string',
                'status' => 'required|string',
                'file' => 'required|file',
            ] :
            // Update Rules
            [
                'title' => 'required',
                'desc' => 'required',
                'status' => 'required',
                'file' => 'sometimes|nullable|file',
            ];
    }

    public function niceName(): array
    {
        return [
            'title' => __('main.title'),
            'status' => __('main.status'),
            'desc' => __('main.desc'),
            'file' => __('main.file'),
        ];
    }
}
