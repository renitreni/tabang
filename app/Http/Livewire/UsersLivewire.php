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

    public ?int $userID = null;

    public ?string $email = null;

    public ?string $password = null;

    public ?string $passwordConfirmation = null;

    public ?string $lastName = null;

    public ?string $firstName = null;

    public ?string $phone = null;

    public ?string $title = null;

    public ?string $role = null;

    protected $listeners = ['destroyUser' => 'destroy', 'editUser' => 'edit'];

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
                'password' => bcrypt($this->password),
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'profile_photo' => $this->photo->store('profile_photos/'),
            ]);

        $this->email = null;
        $this->phone = null;
        $this->photo = null;
        $this->lastName = null;
        $this->firstName = null;
        $this->password = null;
        $this->passwordConfirmation = null;
    }

    public function destroy($id)
    {
        $this->userID = $id;
    }

    public function confirmDestroy()
    {
        User::query()->find($this->userID)->delete();

        $this->emit('refreshDatatable');
    }

    public function edit($id)
    {
        $this->title = 'Edit User';
        $user = User::find($id);

        $this->email = $user->email;
        $this->phone = $user->phone;
        $this->photo = $user->photo;
        $this->lastName = $user->last_name;
        $this->firstName = $user->first_name;
        $this->password = 'samplepasspass';
        $this->passwordConfirmation = 'samplepasspass';
    }
}
