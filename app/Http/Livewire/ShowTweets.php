<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tweet;

class ShowTweets extends Component
{
    public $msg = '';
    public $btn = "Salvar";


public function create(){
    Tweet::create([
        'content' =>$this->msg,
        'user_id'=> 1,
    ]);
    $this->msg = '';
}

    
    public function render()
    {
        $tweets = Tweet::with('user')->get();
         
        return view('livewire.show-tweets', ['tweets'=> $tweets]);
    }
}
