<?php
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
}elseif($form_type === 'utility_bills') {
  $product_list = [
    [
       ['label' => "Anglian Water", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Affinity Water", 'image_name' => "Affinity Front.jpg",],
       ['label' => "BT", 'image_name' => "BT.jpg",],
       ['label' => "British Gas", 'image_name' => "British Gas.jpg",],
       ['label' => "EDF", 'image_name' => "EDF Gas + Electricity.jpg",],
       ['label' => "EE", 'image_name' => "EE Broadband.jpg",],
       ['label' => "E-ON", 'image_name' => "EON.jpg",],
       ['label' => "Essex & Suffolk Living Water", 'image_name' => "Living Water Essex.jpg",],
       ['label' => "iD Mobile", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Northumbrian Living Water", 'image_name' => "Living Water Northumbrian.jpg",],
       ['label' => "Npower", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "O2", 'image_name' => "O2.jpg",],
       ['label' => "Scottish Power", 'image_name' => "Scottish Power Gas.jpg",],
       ['label' => "Sky", 'image_name' => "Sky.jpg",],
       ['label' => "Spark", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "SSE Southern Electric", 'image_name' => "SSE Southern Electric.jpg",],
       ['label' => "SSE Swalec", 'image_name' => "SSE Swalec.jpg",],
       ['label' => "SSE Scottish Hydro", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Severn Trent", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "South Staffs Water", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Shell Energy", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "SES Water", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Thames Water", 'image_name' => "Thames Water Direct Debit.jpg",],
       ['label' => "Three", 'image_name' => "Three.jpg",],
       ['label' => "United Utilities", 'image_name' => "no-img-thumb.jpg",],
       ['label' => "Utility Point", 'image_name' => "no-img-thumb.jpg"],
       ['label' => "Yorkshire Water", 'image_name' => "Yorkshire Water.jpg"],
    ],
    [
       ['label' => "British Gas", 'image_name' => "British Gas Business.jpg",],
       ['label' => "BT", 'image_name' => "BT Business.jpg",],
       ['label' => "EDF", 'image_name' => "EDF Business.jpg",],
       ['label' => "SSE Airtricity", 'image_name' => "no-img-thumb.jpg",],
    ],
    [
      ['label' => "British Gas", 'image_name' => "British Gas Business.jpg",],
      ['label' => "BT", 'image_name' => "BT Business.jpg",],
      ['label' => "EDF", 'image_name' => "EDF Business.jpg",],
      ['label' => "SSE Airtricity", 'image_name' => "no-img-thumb.jpg",],
    ],
  ];
}

$index = (int) $_GET[ 'index' ];
$product_list_data = [
  "plugin_url" => WDF_PLUGIN_URL,
  "product_list" => $product_list[ $index ]
];
echo json_encode($product_list_data);
