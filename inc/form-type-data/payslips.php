<?php

$step_title_1 = 'How many payslips do you require?';
$step_title_2 = 'Do you require a digital or paper copy?';
$step_title_3 = 'Which payslip do you require?';
$step_title_4 = 'Fill out the details needed';

$help_info1 = '';
$help_info2 = '';

$item_fields = [
  [ 'amount' => 1, 'label' => 'Payslip', 'price' => 10, 'showAmount' => true ],
  [ 'amount' => 2, 'label' => 'Payslips', 'price' => 15, 'showAmount' => true  ],
  [ 'amount' => 3, 'label' => 'Payslips', 'price' => 20, 'showAmount' => true  ],
  [ 'amount' => 4, 'label' => 'Payslips', 'price' => 25, 'showAmount' => true  ],
  [ 'amount' => 5, 'label' => 'Payslips', 'price' => 30, 'showAmount' => true  ],
  [ 'amount' => 6, 'label' => 'Payslips', 'price' => 35, 'showAmount' => true  ],
  [ 'amount' => 12, 'label' => 'Payslips', 'price' => 50, 'showAmount' => true  ],
  [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us', 'showAmount' => false  ],
];
$type_fields = [
  [
    'id' => 0,
    'label' => 'Paper copy ',
    'amount' => 2
  ],
  [
    'id' => 1,
    'label' => 'Digital copy',
    'amount' => 2
  ]
];
