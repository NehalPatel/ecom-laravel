<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'ProductId' => $this->id,
            'ProductName' => $this->name,
            'Details' => $this->description,
            'ProductCategory' => $this->category->name,
            'MRP' => $this->price,
        ];
    }
}
