<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsersLivewire extends Component
{
    use WithFileUploads;

    public $photo;

    public ?string $email = null;

    public ?string $password = null;

    public ?string $passwordConfirmation = null;

    public ?string $lastName = null;

    public ?string $firstName = null;

    public ?string $phone = null;

    public ?string $title = null;

    public ?string $role = null;

    public function render(): Factory|View|Application
    {
        return view('livewire.users-livewire');
    }

    public function updatedPhoto()
    {
        $this->validate([
            'photo' => 'required|file|mimes:jpeg,jpg,png',
        ]);
    }

    public function showAddUserModal($value)
    {
        $this->role = $value;
        if ($value == 1) {
            $this->title = 'Add Admin';
        }
        if ($value == 2) {
            $this->title = 'Add Agency';
        } else {
            $this->title = 'Add User';
        }
    }

    public function save()
    {
        $this->validate([
            'password' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'photo' => 'required|file|mimes:jpeg,jpg,png',
            'passwordConfirmation' => 'required|same:password',
        ]);

        User::query()
            ->create([
                'roles' => $this->role,
                'address' => '',
                'phone' => $this->phone,
                'email' => $this->email,
                'password' => encrypt($this->password),
                'name' => "$this->lastName, $this->firstName",
                'profile_photo' => $this->photo->store('profile_photos/'),
            ]);
        $this->email = null;
        $this->phone = null;
        $this->photo = null;
        $this->password = null;
        $this->lastName = null;
        $this->firstName = null;
        $this->passwordConfirmation = null;
    }
}
