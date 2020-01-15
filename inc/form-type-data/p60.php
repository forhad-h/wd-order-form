<?php

$step_title_1 = 'How many P60’s do you require?';
$step_title_2 = 'Do you require a digital or paper copy?';
$step_title_3 = 'Which P60 do you require?';
$step_title_4 = 'Fill out the details needed';

$help_info1 = '';
$help_info2 = '';
$max_options = 5;

$item_fields = [
  [ 'amount' => 1, 'label' => 'P60', 'price' => 30, 'showAmount' => true ],
  [ 'amount' => 2, 'label' => 'P60', 'price' => 60, 'showAmount' => true  ],
  [ 'amount' => 3, 'label' => 'P60', 'price' => 85, 'showAmount' => true  ],
  [ 'amount' => 4, 'label' => 'P60', 'price' => 105, 'showAmount' => true  ],
  [ 'amount' => 5, 'label' => 'P60', 'price' => 120, 'showAmount' => true  ],
  [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us', 'showAmount' => false  ],
];
$type_fields = [
  [
    'id' => 0,
    'label' => 'Paper copy',
    'amount' => 1
  ],
  [
    'id' => 1,
    'label' => 'Digital copy',
    'amount' => 1
  ]
];
