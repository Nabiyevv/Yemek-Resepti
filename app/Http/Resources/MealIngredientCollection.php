<?php

namespace App\Http\Resources;

use App\Models\Ingredient;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class MealIngredientCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $ingr = Ingredient::findOrFail($this->ingredient_id);
        return [
            'id'=>$this->id,
            'meal_id'=>$this->meal_id,
            'ingredient_id' =>$this->ingredient_id,
            'importance' =>$this->importance,
            'amount' => $this->amount,
            'unit' =>$this->unit,
            "ingredient" =>[
                'id' =>$ingr->id,
                'name' => $ingr->name,
            ],
        ];
    }
}
