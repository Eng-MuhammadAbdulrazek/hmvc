<?php

namespace Modules\Clients\App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientsResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'identity_number' => $this->identity_number,
            'tax_number' => $this->tax_number,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->email,
            'notes' => $this->email,
        ];
    }
}
