<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;



class ProfileLivewire extends Component
{
    use WithFileUploads;

    public ?string $email = null;

    public ?string $password = null;

    public ?string $lastName = null;

    public ?string $firstName = null;

    public ?string $phone = null;

    public ?string $address = null;

    public $user_id;

    public $photo;
    public $tempo_photo;

    public function deletePhoto()
    {
        $this->photo = "";
        $this->tempo_photo = "";

    }

    public function updateProfile()
    {
        $this->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if($this->tempo_photo) {
            $this->validate(['tempo_photo' => 'file|mimes:jpeg,jpg,png']);
            $this->photo = $this->tempo_photo->store('profile_photos/');
        }

        User::where('id',$this->user_id)->update([
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'phone' => $this->phone,
            'email' => $this->email,
            'address' => $this->address,
            'profile_photo' => $this->photo,
        ]);
        $this->emit('toast', 'Profile has been updated');
    }

    public function mount()
    {
        $this->user_id = auth()->user()->id;
        $this->firstName = auth()->user()->first_name;
        $this->lastName = auth()->user()->last_name;
        $this->email = auth()->user()->email;
        $this->phone = auth()->user()->phone;
        $this->address = auth()->user()->address;
        $this->photo = auth()->user()->profile_photo;
    }

    public function render()
    {
        // dd(User::where('id',$this->user_id)->get());
        return view('livewire.profile-livewire');
    }

    
}
