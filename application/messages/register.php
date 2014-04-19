<?php
/**
 * User: BrSpirit
 * Date: 07.02.14
 */
return array(
    'username' => array(
        'not_empty' => 'Login nie może być pusty',
        'regex' => 'Login może się składać tylko z liter i cyfr',
        'min_length' => 'Login nie może być krótszy niż 3 znaki',
        'max_length' => 'Login nie może być dłuższy niż 16 znaków',
    ),
    'password' => array(
        'not_empty' => 'Hasło nie może być puste',
        'regex' => 'Hasło moze składać się tylko z liter, cyfr oraz znaków specjalnych: ".", "_", "-"',
        'min_length' => 'Hasło musi mieć minimum 6 znaków',
        'max_length' => 'Hasło nie może być dłuższe niż 12 znaków',
    ),
    'email' => array(
        'email' => 'Podaj poprawny e-mail. Będzie potrzebny do aktywacji konta.',
        'not_empty' => 'Musisz podać adres e=mail. Będzie potrzebny do aktywacji konta.'
    ),
    're_password' => array(
        'not_empty' => 'Powtórz hasło.',
        'match' => 'Podane hasła nie są takie same'
    ),
    'nick' => array(
        'not_empty' => 'Podaj nick. Będzie widoczny na portalu',
        'regex' => 'Nick może zawierać litery alfabetu(w tym polskie znaki), cyfry praz znaki specjalne: ".", "_", "-"',
        'min_lenght' => 'Nick musi mieć minimum 3 znaki',
        'max_lenght' => 'Nick nie może być dłuższy ni 16 znaków'
    )
);