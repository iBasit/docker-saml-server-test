<?php

$config = array(

    'test-sp' => array(
        'saml:SP',
        'entityID' => 'http://sso.circusstreet.localhost/metadata.xml',
        'idp' => 'http://localhost:8081/simplesaml/saml2/idp/metadata.php',
    ),

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'test:test' => array(
            'uid' => array('1'),
            'eduPersonAffiliation' => array('group1'),
            'email' => 'test@circusstreet.com',
        ),
        'test2:test2' => array(
            'uid' => array('2'),
            'eduPersonAffiliation' => array('group2'),
            'email' => 'test2@circusstreet.com',
        ),
    ),
);
