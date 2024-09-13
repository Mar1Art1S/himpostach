<?php

namespace App\Livewire\Forms;

use App\Models\Subscribe;
use Livewire\Attributes\Validate;
use Livewire\Form;

class SubscribeForm extends Form
{
    #[Validate('required', message: 'Необхідно вказати пошту')]
    #[Validate('email', message: 'Вкажіть пошту коректно')]
    #[Validate('unique:subscribes,email', message: 'Пошта вже зареєстрована')]
    #[Validate('min:10', message: 'Занадто мало вказано символів.')]
    #[Validate('max:60', message: 'Вказано забагато символів.')]
    public $email = '';

    public function store()
    {
        $this->validate();

        Subscribe::create($this->all());
    }
}
