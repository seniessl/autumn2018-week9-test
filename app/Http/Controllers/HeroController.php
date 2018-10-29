<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeroController extends Controller
{
    
    public function index()
    {
        $heroes = \App\Hero::orderBy('name', 'ASC')->get();

        $view = view('hero/index');
        $view->heroes = $heroes;
        return $view;
    }

    public function show($hero_slug)
    {
        $hero = \App\Hero::where('slug', $hero_slug)->first();

        if (!$hero) {
            abort(404, 'Hero not found');
        }

        $view = view('hero/show');
        $view->hero = $hero;
        return $view;
    }

    public function store(Request $request) {
        $emergency = new \App\Emergency;
        $emergency->fill($request->only(['subject','description']));
        $emergency->save();
    }
}
