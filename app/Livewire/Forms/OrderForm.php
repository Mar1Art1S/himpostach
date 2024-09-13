<?php

namespace App\Livewire\Forms;

use App\Models\Order;
use Livewire\Attributes\Validate;
use Livewire\Form;

class OrderForm extends Form
{
    #[Validate('max:100')]
    #[Validate('required', message: 'Вкажіть Ваше ім`я')]
    #[Validate('min:5', message: 'Введіть ФІО повністю')]
    public $fio;

    #[Validate('max:100')]
    #[Validate('required', message: 'Необхідно вказати пошту або телефон')]
    public $contact;

    #[Validate('max:80')]
    public $city;

    #[Validate('max:5000')]
    public $description;

    public $product;

    public function store()
    {
        $this->product = $this->product ?? 'Задайте запитання';
        $this->validate();

        Order::create($this->all());
    }
}



