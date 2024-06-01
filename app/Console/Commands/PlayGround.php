<?php

namespace App\Console\Commands;

use App\Models\Quotes;
use Illuminate\Console\Command;
use App\Http\Helpers\QuotesHelper;

class PlayGround extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play:ground';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $q = QuotesHelper::getQuote();
        $this->output->writeln($q->quote);
        $this->output->writeln($q->character);
        $this->output->writeln($q->image);

        $quote = new Quotes();
        $quote->quote = $q->quote;
        $quote->character = $q->character;
        $quote->image = $q->image;
        $quote->save(); 

        $quotes = Quotes::orderByDesc('created_at')->limit(5)->get();
        foreach($quotes as $qte) {
            $this->output->writeln($qte->quote);
            $this->output->writeln($qte->character);
            $this->output->writeln($qte->image);

        }
    }
}
