<?php

return function($site, $pages, $page) {
    $form = uniform('contact-form', [
        'required' => [
          'first_name'  => '',
          'last_name'  => '',
          'address_1'  => '',
          'address_2'  => '',
          'city'  => '',
          'state'  => '',
          'zip_code'  => '',
          'telephone'  => '',
          '_from' => 'email'
        ],
        'actions' => [
            [
                '_action' => 'email',
                'to'      => 'casey@bullshit.systems',
                'sender'  => 'info@inglettgallery.com',
                'subject' => '[Mailing List] New signup: {first_name} {last_name}',
                'snippet' => 'uniform-email-table'
            ]
        ]
    ]);

    return compact('form');
};
