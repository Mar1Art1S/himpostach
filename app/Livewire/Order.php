<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\OrderForm;
use App\Mail\OrderShipped;
use Illuminate\Support\Facades\Mail;

class Order extends Component
{
    public $product;

    public OrderForm $order;


    public function save()
    {

        $this->order->store($this->product);
        $this->sendToMail();

        session()->flash('order-success');
    }

    public function sendToMail(): void
    {
        Mail::to(env('ADMIN_EMAIL'))->send(new OrderShipped($this->order->all()));
    }

    public function render()
    {
        return view('livewire.order');

    }
}


