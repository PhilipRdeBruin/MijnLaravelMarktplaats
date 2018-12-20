<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Rubriek;
use App\Gebruiker;


class AdvertentieController extends Controller
{
    public function index() {
        // haalt alle advertenties op
        $advertenties = \App\Advertentie::all();
        $advertenties = $advertenties->sortByDesc('ad_id');

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

        // tijdelijk: tot inlog-procedure werkend is...
        $verkoper = "Philip61";

        $rubriek = \App\Rubriek::find(Input::get('rubriek'));
        $verkoper = \App\Gebruiker::where('gebr_naam', $verkoper)->first();   

        $advertentie->verkoper_id   = $verkoper->gebr_id;
        $advertentie->ad_naam       = Input::get('ad_naam');
        $advertentie->ad_tekst      = Input::get('advertentie');
        $advertentie->art_prijs     = Input::get('art_prijs');
        $advertentie->prijs_vanaf   = Input::get('prijs_vanaf') == 'on' ? 1 : 0;
        $advertentie->prijs_vanaf2  = Input::get('prijs_vanaf2') == 'on' ? 1 : 0;
        $advertentie->ad_status     = "open";

        $rubriek->advertenties()->save($advertentie);

        // herleidt terug naar de overzichtspagina
        return \Redirect::to('index');
    }
}
