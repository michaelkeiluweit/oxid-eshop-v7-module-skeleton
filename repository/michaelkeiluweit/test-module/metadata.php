<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id' => 'testmodule',
    'title'       => [
        'de' => 'MichaelKeiluweit :: Test Module',
        'en' => 'MichaelKeiluweit :: Test Module',
    ],
    'version'       => '1.0.0',
    'controllers' => [
        'foobar' => \MichaelKeiluweit\TestModule\Controller\Foobar::class,
    ],
];
