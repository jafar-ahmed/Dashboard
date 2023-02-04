<?php

namespace App\Jobs;

use App\Mail\NotifyEmail;
use App\Models\Category;
use App\Models\Slider;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SendMails implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public $data , $type ;
    public function __construct($data , $type )
    {
        $this->data = $data;
        $this->type = $type;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        foreach ($this -> data as $_data ){
//          $dataview = 'Wellcome To Dashboard !!!';
            if ($this->type == 'category'){
                $dataview = Category::orderByDesc('created_at')->first();
            }elseif ($this->type == 'slider'){
                $dataview = Slider::orderByDesc('created_at')->first();
            }
            Mail::to($_data->email)->send(new NotifyEmail($dataview, $this->type));
        }
    }
}
