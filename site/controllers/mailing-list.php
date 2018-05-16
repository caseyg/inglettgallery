<?php

use Uniform\Form;

return function ($site, $pages, $page)
{
    $form = new Form([
        'first_name'  => [
            'rules' => ['required'],
            'message' => 'Please enter a First Name'
        ],
        'last_name'  => [
            'rules' => ['required'],
            'message' => 'Please enter a Last Name'
        ],
        'address_1'  => '',
        'address_2'  => '',
        'city'  => '',
        'state'  => '',
        'zip_code'  => '',
        'telephone'  => '',
        '_from' => [
            'rules' => ['required'],
            'message' => 'Please enter an Email Address'
        ],
        'art_enthusiast'  => '',
        'artist'  => '',
        'collector'  => '',
        'curator'  => '',
        'dealer'  => '',
        'press'  => ''
    ]);

    if (r::is('POST')) {
        $form->withoutGuards();
        $form->emailAction([
            'to' => 'casey@bullshit.systems',
            'from' => 'casey@bullshit.systems',
            'subject' => '[Mailing List] New signup: {first_name} {last_name}'
        ]);
    }

    return compact('form');
};
