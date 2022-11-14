<?php

it('has complainform page', function () {
    $response = $this->get('/complainform');

    $response->assertStatus(200);
});
