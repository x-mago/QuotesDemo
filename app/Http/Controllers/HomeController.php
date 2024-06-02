<?php

namespace App\Http\Controllers;

use App\Models\Quotes;
use Illuminate\Http\Request;
use App\Http\Helpers\QuotesHelper;
use Illuminate\Contracts\Encryption\DecryptException;

class HomeController extends Controller
{
    public function dashboard() {
        $quotes = Quotes::orderByDesc('created_at')->limit(4)->get();
        try {
            return view('zitate')->with('quotes', $quotes);
        } catch(DecryptException $e) {
            return view('error-decrypt')->with('error', $e->getMessage());            
        }
    }

    public function update() {
        $quote = QuotesHelper::getQuote();
        QuotesHelper::saveQuote($quote);
        return redirect(route('dashboard'));
    }
}
