<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\Console\Input\Input;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heros = Hero::all();
        return view("backoffice.hero.all", compact("heros"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backoffice.hero.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hero = new Hero();
        $hero->h1 = $request->h1;
        $hero->h2 = $request->h2;
        $hero->save();

        return redirect()->route("hero.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function show(Hero $hero)
    {
        return view("backoffice.hero.show", compact("hero"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function edit(Hero $hero)
    {
        return view("backoffice.hero.edit", compact("hero"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hero $hero)
    {
        $hero->h1 = $request->h1;
        $hero->h2 = $request->h2;

        if($request->file('image')!= null){
            // $filename = $request->file('image')->getClientOriginalName();
            Storage::disk('public')->delete("img/" . $hero->image);

            $filename = "hero-img" . '.' . $request->file('image')->getClientOriginalExtension();
            $hero->image = $filename;

            $request->file('image')->storePubliclyAs('img/', $filename , 'public');
        }

        $hero->save();

        return redirect()->route("hero.index")->with("successMessage", "Votre chiffre à bien été ajouté");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hero  $hero
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hero $hero)
    {
        $hero->delete();
        return redirect()->back()->with("successMessage", "Votre chiffre à bien été suprimmé");
    }
}
