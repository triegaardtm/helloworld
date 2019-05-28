<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use App\CustomerRecipe;
use App\Recipe;
use Illuminate\Http\Request;

class RecipesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipes = Recipe::paginate(5);
        return view('recipes',compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        dd($request);

        $order = Order::create([
            'user_id'=>Auth()->user()->id
        ]);


        $total = count($request->recipes);
//        dd($total);

        for($i = 0;  $i < $total; $i++) {
           // echo "the number is $i<br>";


            CustomerRecipe::create([
                'order_id'=> $order->id,
                'recipe_id' => $request->recipes[$i],
                'qty' => $request->quantities[$i],
            ]);
            return redirect('recipes');

        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
