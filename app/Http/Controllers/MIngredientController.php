<?php

namespace App\Http\Controllers;

use App\Http\Resources\MealIngredientCollection;
use App\Models\Ingredient;
use App\Models\MIngredient;
use App\Models\Product;
use Illuminate\Http\Request;

class MIngredientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $meal_ing = MIngredient::where('meal_id',$id)->get();
        //dd($meal_ing);
        //return gettype($ingr);
        return MealIngredientCollection::collection($meal_ing);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Product $product)
    {
        $name = Product::findOrFail($product->id)->name;
        $pid = $product->id;
        $ingrs = Ingredient::all();
        return view('mingr.create',compact('name','ingrs','pid'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,Product $product)
    {
        $mingr = MIngredient::create([
            'meal_id' => $product->id,
            'ingredient_id' => intval($request->ingr),
            'importance' => intval($request->impr),
            'amount' => intval($request->amount),
            'unit' =>$request->unit,
        ]);
        return to_route('ingrs.index',$product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
