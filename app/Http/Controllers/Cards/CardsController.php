<?php

namespace App\Http\Controllers\Cards;

use App\Models\Card;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index()
    {	
        $card = Card::all();
        return view('cards.card', compact('card'));
    }
    public function show(Card $foobar)
    {
    	
 		return view('cards.show',compact('foobar'));
    }
}
