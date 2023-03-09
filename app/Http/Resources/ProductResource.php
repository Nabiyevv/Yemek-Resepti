<?php

namespace App\Http\Resources;

use App\Models\MIngredient;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //$ingr = Ingredient::findOrFail($this->ingredient_id);
        $meal_ing = MIngredient::where('meal_id',$this->id)->get();
        return [
            'id' => $this->id,
            'slug' =>$this->slug,
            'name' => $this->name,
            'picture' => $this->picture,
            'difficulty' => $this->difficulty,
            'duration_preparation' => $this->duration_preparation,
            'duration_cooking' => $this->duration_cooking,
            'ingredient_count' => $this->ingredient_count,
            'meal_ingredients' => MealIngredientCollection::collection($meal_ing),
            
        ];
    }
}
