<?php

namespace App\Http\Helpers;

use App\Models\Quotes;
use Illuminate\Support\Facades\Http;

class QuotesHelper {
	const SERVICE_URI = "https://thesimpsonsquoteapi.glitch.me/quotes";
	
	public static function getQuote() {
		$quote = Http::get(self::SERVICE_URI);
		$obj = json_decode($quote);
		if(count($obj) > 0) {
            return $obj[0];
		} else {
            throw new \Exception('Failed to request Quote!');
        }
	}

	public static function saveQuote($quoteObj) {
        $quote = new Quotes();
        $quote->quote = $quoteObj->quote;
        $quote->character = $quoteObj->character;
        $quote->image = $quoteObj->image;
        $quote->save();
	}
}