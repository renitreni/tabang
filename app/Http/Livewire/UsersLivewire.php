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

    public ?string $profile_photo = null;

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
        $this->resetVars();
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
            'email' => 'required|unique:users',
            'phone' => 'required|unique:users',
            'photo' => 'required|file|mimes:jpeg,jpg,png',
            'password' => 'required',
            'passwordConfirmation' => 'required|same:password',
        ]);

        $user = User::query()
                    ->updateOrCreate(['id' => $this->userID], [
                        'roles' => $this->role,
                        'address' => '',
                        'phone' => $this->phone,
                        'email' => $this->email,
                        'first_name' => $this->firstName,
                        'last_name' => $this->lastName,
                        'password' => bcrypt($this->password),
                        'profile_photo' => $this->photo->store('profile_photos/'),
                    ]);

        if (! $this->userID) {
            $user->password = bcrypt($this->password);
            $user->save();
        }

        $this->resetVars();
        $this->emit('refreshDatatable');
    }

    public function resetVars()
    {
        $this->userID               = null;
        $this->email                = null;
        $this->phone                = null;
        $this->role                 = null;
        $this->photo                = null;
        $this->lastName             = null;
        $this->firstName            = null;
        $this->password             = null;
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

        $this->userID               = $user->id;
        $this->email                = $user->email;
        $this->phone                = $user->phone;
        $this->role                 = $user->roles;
        $this->profile_photo        = $user->profile_photo;
        $this->lastName             = $user->last_name;
        $this->firstName            = $user->first_name;
        $this->password             = 'samplepasspass';
        $this->passwordConfirmation = 'samplepasspass';

        $this->emit('refreshDatatable');
    }

    public function update()
    {
        $this->validate([
            'password' => 'required',
            'email' => 'required|unique:users,email,'.$this->userID,
            'phone' => 'required|unique:users,phone,'.$this->userID,
            'passwordConfirmation' => 'required|same:password',
        ]);

        if($this->photo) {
            $this->profile_photo = $this->photo->store('profile_photos/');
        }

        User::query()
            ->updateOrCreate(['id' => $this->userID], [
                'roles' => $this->role,
                'address' => '',
                'phone' => $this->phone,
                'email' => $this->email,
                'first_name' => $this->firstName,
                'last_name' => $this->lastName,
                'profile_photo' => $this->profile_photo,
            ]);

        $this->emit('refreshDatatable');
    }

    public function resetPassword()
    {
        User::query()
            ->updateOrCreate(['id' => $this->userID], [
                'password' => bcrypt('password'),
            ]);
    }
}
