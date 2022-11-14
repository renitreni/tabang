<?php

use App\Http\Livewire\ComplaintFormLivewire;
use App\Models\Complaint;
use Faker\Factory;
use Livewire\Livewire;

it('can visit complain form page', function () {
    $response = $this->get('/');
    $response->assertStatus(200);
});

it('can submit complaint', function () {
    $faker = Factory::create();
    $passportNo = $faker->creditCardNumber;
    Livewire::test(ComplaintFormLivewire::class)
        ->set('details', [
            'fullname' => $faker->name,
            'birthdate' => $faker->date,
            'gender' => $faker->randomElement(['male', 'female']),
            'passport_no' => $passportNo,
            'occupation' => $faker->jobTitle,
            'email' => $faker->safeEmail,
            'contact_person' => $faker->name,
            'contact_1' => $faker->phoneNumber,
            'contact_2' => $faker->phoneNumber,
            'complaint' => $faker->paragraph(10),
        ])
        ->call('store')
        ->assertHasNoErrors();

        $this->assertTrue(Complaint::query()->where('passport_no', $passportNo)->exists());
});


