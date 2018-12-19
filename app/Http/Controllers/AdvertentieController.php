<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class AdvertentieController extends Controller
{
    public function index() {
        // haalt alle advertenties op
        $advertenties = \App\Advertentie::all();

        // laad de view and geeft de advertenties door
        return \View::make('pages.index')
            ->with('advertenties', $advertenties);
    }

    public function plaatsen() {
        // haalt alle rubrieken op
        $rubrieken = \App\Rubriek::all();
        
        // laad de view and geeft de rubrieken door
        return \View::make('pages.plaatsen')
            ->with('rubrieken', $rubrieken);;  
    }

    public function invoeren() {
        // slaat de nieuwe advertentie op in de database
        $advertentie = new \App\Advertentie;

        $advertentie->naam       = Input::get('ad_naam');
        $advertentie->rubriek    = Input::get('rubr_naam');
        $advertentie->save();

        // herleidt terug naar de overzichtspagina
        return \Redirect::to('pages.index');
    }
}
