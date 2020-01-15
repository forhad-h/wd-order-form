<?php

$step_title_1 = 'How many utility bills do you require?';
$step_title_2 = 'What type of bill do you require?';
$step_title_3 = 'Which bill do you require?';
$step_title_4 = 'Fill out the details needed';

$help_info1 = '';
$help_info2 = '';
$max_options = 10;

$item_fields = [
  [ 'amount' => 1, 'label' => 'Utility Bill', 'price' => 20, 'showAmount' => true ],
  [ 'amount' => 2, 'label' => 'Utility Bills', 'price' => 40, 'showAmount' => true  ],
  [ 'amount' => 3, 'label' => 'Utility Bills', 'price' => 60, 'showAmount' => true  ],
  [ 'amount' => 4, 'label' => 'Utility Bills', 'price' => 75, 'showAmount' => true  ],
  [ 'amount' => 5, 'label' => 'Utility Bills', 'price' => 85, 'showAmount' => true  ],
  [ 'amount' => 10, 'label' => 'Utility Bills', 'price' => 160, 'showAmount' => true  ],
  [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us', 'showAmount' => false  ],
];
$type_fields = [
  [
    'id' => 0,
    'label' => 'UK Personal Utility Bills',
    'amount' => 27
  ],
  [
    'id' => 1,
    'label' => 'UK Business Utility Bills',
    'amount' => 4
  ],
  [
    'id' => 2,
    'label' => 'Ireland Personal Utility Bills',
    'amount' => 4
  ]
];
