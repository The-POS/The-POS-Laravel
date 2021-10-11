<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            "sku" => $this->sku,
            "name" => $this->name,
            "price" => $this->price,
            "tax_rate" => $this->tax_rate,
            "taxed_price" => $this->taxed_price,
            "created_at" => $this->created_at,
            "updated_at" => $this->updated_at,
        ];
    }
}
