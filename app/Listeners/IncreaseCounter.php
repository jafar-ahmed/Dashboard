<?php

namespace App\Listeners;

use App\Events\InstagramViewer;
use App\Models\Video;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

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
    public function handle(InstagramViewer $event)
    {
        if (!session()->has('VideoIsVisited')){
            $this->updateViewer($event->video);
        }else {
            return false;
        }
    }

    function updateViewer($video){
        $video->viewers = $video->viewers + 1 ;
        $video->save();
        session()->put('VideoIsVisited', $video->id);
    }
}
