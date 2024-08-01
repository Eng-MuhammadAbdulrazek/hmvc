<?php

namespace Modules\Clients\App\Http\Controllers;

use Modules\Clients\App\Http\Resources\ClientsResource;
use Lynx\Base\Api;
use Modules\Clients\App\Models\Client;

class ClientsController extends Api
{
    protected $entity = Client::class;
    protected $resourcesJson = ClientsResource::class;
    protected $spatieQueryBuilder = true;

    public function rules($type, int $id = null): array
    {

        return $type == 'store' ?
            // store Rules

            [
                'type' => 'required|string',
                'name' => 'required|string',
                'identity_number' => 'required|numeric|unique:clients',
                'tax_number' => 'nullable|numeric|unique:clients',
                'phone' => 'required|string',
                'email' => 'nullable|email',
                'address' => 'nullable|string',
                'notes' => 'nullable|string',
            ]

            :
            // Update Rules
            [
                'type' => 'required|string',
                'name' => 'required|string',
                'identity_number' => 'required|numeric|unique:clients',
                'tax_number' => 'nullable|numeric|unique:clients',
                'phone' => 'required|string',
                'email' => 'nullable|email',
                'address' => 'nullable|string',
                'notes' => 'nullable|string',
            ];
    }

    public function niceName(): array
    {
        return [
            'type' => 'type',
            'name' => 'name',
            'identity_number' => 'identity_number',
            'tax_number' => 'tax_number',
            'phone' => 'phone',
            'email' => 'email',
            'address' => 'address',
            'notes' => 'notes',
        ];
    }
}
