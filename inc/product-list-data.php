<?php
/*
   Data for product list
*/
$form_type = $_GET['form_type'];
$product_list = [];

if($form_type === 'bank_statements') {
  $product_list = [
    [
       ['label' => "Bank of Ireland", 'image_name' => "bank of ireland uk.jpg",],
       ['label' => "Bank of Scotland", 'image_name' => "bank of scoltand.jpg",],
       [
        'label' => "Barclays",
        'image_name' => "barclays.jpg",
        'selection1' => [
          'title' => 'Please select account type.',
          'options' => [
            'Personal',
            'Savings'
          ],
        ],
       ],
       ['label' => "Cashplus", 'image_name' => "cashplus.jpg",],
       ['label' => "Co-operative", 'image_name' => "co-op.jpg",],
       ['label' => "Counting Up", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Danske", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "First Direct", 'image_name' => "first direct.jpg",],
       ['label' => "First Trust", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Halifax", 'image_name' => "halifax.jpg",],
       ['label' => "HSBC", 'image_name' => "hsbc.jpg",],
       ['label' => "Lloyds", 'image_name' => "lloyds.jpg",],
       ['label' => "Metro", 'image_name' => "metro.jpg",],
       ['label' => "Monese", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Monzo", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Nationwide", 'image_name' => "nationwide.jpg",],
       ['label' => "Natwest", 'image_name' => "natwest.jpg",],
       ['label' => "RBS", 'image_name' => "rbs.jpg",],
       ['label' => "Santander", 'image_name' => "santander.jpg",],
       ['label' => "Starling", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Tesco", 'image_name' => "tesco.jpg",],
       ['label' => "Think Money", 'image_name' => "think money.jpg",],
       ['label' => "Tide", 'image_name' => "tide.jpg",],
       ['label' => "TSB", 'image_name' => "tsb.jpg",],
       ['label' => "Unity Trust", 'image_name' => "unity trust.jpg",],
       ['label' => "Yorkshire", 'image_name' => "yorkshire.jpg"],
    ],
    [
       ['label' => "Bank of Scotland", 'image_name' => "bank of scotland business.jpg",],
       ['label' => "HSBC", 'image_name' => "hsbc business.jpg",],
       ['label' => "Lloyds", 'image_name' => "lloyds business.jpg",],
       ['label' => "Metro", 'image_name' => "metro business.jpg",],
       ['label' => "Santander", 'image_name' => "santander.jpg",],
       ['label' => "TSB", 'image_name' => "tsb business.jpg",],
       ['label' => "Tide", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Yorkshire", 'image_name' => "yorkshire business.jpg",],
    ],
    [
      ['label' => "AIB Ireland", 'image_name' => "aib.jpg",],
      ['label' => "Bank of Ireland", 'image_name' => "bank of ireland.jpg",],
      ['label' => "EBS", 'image_name' => "ebs.jpg",],
      ['label' => "KBC", 'image_name' => "kbc.jpg",],
      ['label' => "Permanent tsb", 'image_name' => "perm tsb.jpg",],
    ],
    [
      ['label' => "Bank of Ireland", 'image_name' => "ireland bank business.jpg",],
    ],
  ];
}
