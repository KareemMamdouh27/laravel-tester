<?php

namespace App\Listeners;

use App\Models\Video;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Events\VideoVewer;

class IncreaseCounter
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(VideoVewer $event)
    {
        $this->updateView($event -> video);
    }

    public function updateView($video)
    {
        $video -> views = $video -> views + 1;
        $video -> save();
    }
}
