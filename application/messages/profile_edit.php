<?php
/**
 * User: BrSpirit
 * Date: 07-lut-2014
 */
return array(
    'email' => array(
        'email' => 'Musisz podać poprawny e-mail.'
    ),
    'nick' => array(
        'regex' => 'Nick może zawierać litery alfabetu(w tym polskie znaki), cyfry praz znaki specjalne: ".", "_", "-"',
        'min_lenght' => 'Nick musi mieć minimum 3 znaki',
        'max_lenght' => 'Nick nie może być dłuższy ni 16 znaków'
    ),
    'city' => array(
        'regex' => 'Miasto może składać się tylko z liter, spacji i "-"'
    ),
    'signature' => array(
        'max_length' => 'Sygnatura nie może mieć więcej niż 255 znaków'
    ),
    'first_name' => array(
        'alpha' => 'Imię może składać się wyłącznie z liter alfabetu'
    ),
    'last_name' => array(
        'alpha' => 'Nazwisko może składać się wyłącznie z liter i znaku "-"'
    )
);