<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Feed;
Use App\Models\Item;
use Illuminate\Support\Facades\Http;
use Carbon\Carbon;

class FetchFeeds extends Command
{
    protected $signature = 'feeds:fetch';

    protected $description = 'Fetch and store all RSS items from each feed into the items table.';

    public function handle()
    {
        return 0;
    }


}
