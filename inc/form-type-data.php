<?php
$form_type = $_GET['wd_form_type'];
$formated_form_type = ucwords(str_replace('_', ' ', $form_type));
$item_fields = '';
$help_info1 = '';
$help_info2 = '';

if($form_type === 'bank_statements') {
  $help_info1 = 'Each statement has 1 - 2 page of transactions.';
  $help_info2 = 'Each statement can cover between 1 - 3 months.';
  $item_fields = [
    [ 'amount' => 1, 'label' => 'Summary Sheet (No Transactions)', 'price' => 25 ],
    [ 'amount' => 1, 'label' => 'Statement', 'price' => 35 ],
    [ 'amount' => 2, 'label' => 'Statements', 'price' => 70 ],
    [ 'amount' => 3, 'label' => 'Statements', 'price' => 105 ],
    [ 'amount' => 4, 'label' => 'Statements', 'price' => 130 ],
    [ 'amount' => 5, 'label' => 'Statements', 'price' => 150 ],
    [ 'amount' => 6, 'label' => 'Statements', 'price' => 165 ],
    [ 'amount' => 12, 'label' => 'Statements', 'price' => 300 ],
    [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us' ],
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
}elseif($form_type === 'utility_bills') {
  $item_fields = [
    [ 'amount' => 1, 'label' => 'Utility Bill', 'price' => 20 ],
    [ 'amount' => 2, 'label' => 'Utility Bills', 'price' => 40 ],
    [ 'amount' => 3, 'label' => 'Utility Bills', 'price' => 60 ],
    [ 'amount' => 4, 'label' => 'Utility Bills', 'price' => 75 ],
    [ 'amount' => 5, 'label' => 'Utility Bills', 'price' => 85 ],
    [ 'amount' => 10, 'label' => 'Utility Bills', 'price' => 160 ],
    [ 'amount' => 0, 'label' => 'Other', 'price' => 'Contact Us' ],
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
}
