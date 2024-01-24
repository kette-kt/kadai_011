<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>kadai_011</title>
</head>
<body>
  <?php
  $products = ['name' => '玉ねぎ',
               'price' => 200,
               'area' => '北海道'
];
 foreach($products as $key => $value){
  echo "{$key}:{$value}<br>";
}
?> 
</body>
</html>