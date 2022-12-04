<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class RegisterLivewire extends Component
{
    use WithFileUploads;

    public $photo;

    public ?string $email = null;

    public ?string $password = null;

    public ?string $passwordConfirmation = null;

    public ?string $lastName = null;

    public ?string $firstName = null;

    public ?string $phone = null;

    public function render(): Factory|View|Application
    {
        return view('livewire.register-livewire')->layout('layouts.guest');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'required|file|mimes:jpeg,jpg,png',
        ]);
    }

    public function save()
    {
        $this->validate([
            'lastName' => 'required',
            'firstName' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'passwordConfirmation' => 'required|same:password',
            'photo' => 'required|file|mimes:jpeg,jpg,png',
        ]);

        $user = User::query()
            ->create([
                'last_name' => $this->lastName,
                'first_name' => $this->firstName,
                'email' => $this->email,
                'password' => encrypt($this->password),
                'roles' => 3,
                'profile_photo' => $this->photo->store('profile_photos/'),
                'phone' => $this->phone,
                'address' => '',
            ]);

        auth()->login($user);

        return to_route('home');
    }
}
