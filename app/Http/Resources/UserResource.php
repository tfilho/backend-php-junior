<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    /**
     * @param \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "User" =>
                [
                    "id" => $this->id,
                    "name" => $this->name,
                    "cpf" => $this->cpf,
                    "email" => $this->email,
                    "createdAt" => $this->created_at,
                    "updatedAt" => $this->updated_at
                ]
        ];
    }
}
