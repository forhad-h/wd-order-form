<?php

$step_title_1 = 'How many bank statements do you require?';
$step_title_2 = 'What type of bank do you require?'
$step_title_3 = 'Which bank do you require?'
$step_title_4 = 'Fill out the details needed'

$help_info1 = 'Each statement has 1 - 2 page of transactions.';
$help_info2 = 'Each statement can cover between 1 - 3 months.';

$item_fields = [
  [ 'amount' => 1, 'label' => 'Summary Sheet <small>(No Transactions)</small>', 'price' => 25, 'showAmount' => false ],
  [ 'amount' => 1, 'label' => 'Statement', 'price' => 35, 'showAmount' => true ],
  [ 'amount' => 2, 'label' => 'Statements', 'price' => 70, 'showAmount' => true ],
  [ 'amount' => 3, 'label' => 'Statements', 'price' => 105, 'showAmount' => true ],
  [ 'amount' => 4, 'label' => 'Statements', 'price' => 130, 'showAmount' => true ],
  [ 'amount' => 5, 'label' => 'Statements', 'price' => 150, 'showAmount' => true ],
  [ 'amount' => 6, 'label' => 'Statements', 'price' => 165, 'showAmount' => true ],
  [ 'amount' => 12, 'label' => 'Statements', 'price' => 300, 'showAmount' => true ],
  [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us', 'showAmount' => false ],
];
$type_fields = [
  [
    'id' => 0,
    'label' => 'UK Personal Accounts',
    'amount' => 26
  ],
  [
    'id' => 1,
    'label' => 'UK Business Accounts',
    'amount' => 8
  ],
  [
    'id' => 2,
    'label' => 'Ireland Personal Accounts',
    'amount' => 5
  ],
  [
    'id' => 3,
    'label' => 'Ireland Business Accounts',
    'amount' => 1
  ],
];
