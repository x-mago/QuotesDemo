<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Helpers\QuotesHelper;

class HomeController extends Controller
{
    public function dashboard() {
        $quotes = Quotes::orderByDesc('created_at')->limit(4)->get();
        return view('dashboard')->with('quotes', $quotes);
    }

    public function update() {
        $quote = QuotesHelper::getQuote();
        QuotesHelper::saveQuote($quote);
        return redirect(route('dashboard'));
    }
}
