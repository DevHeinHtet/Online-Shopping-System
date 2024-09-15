<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Models\Category;
class ProductResource extends JsonResource
{

    public function getCategoryName(){
        $category = Category::whereId($this->category_id)->first();
        return $category->name;
    }
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'productId' => $this->id,
            'name' => $this->name,
            'categoryName'=> $this->getCategoryName(),
            'price'=> $this->price,
            'description'=> $this->description,
            'condition'=> $this->condition,
            'type'=> $this->type,
            'status'=> $this->status,
            'photo'=> $this->photo,
            'ownerName'=> $this->owner_name,
            'phoneNo'=> $this->phone_no,
            'address'=> $this->address,
            'latitudeLogitude'=> $this->latitude_logitude,
            'createdDate' => $this->created_at,
        ];
    }
}
