<?php 

  $name = "Snatch";
  $hasSeen = true;

  if($hasSeen) {
    $message = "You have seen $name";
  } else {
    $message = "You haven't seen $name";
  }

  // array
  $books = ['book one', 'book two', 'book three'];

  // associative array
  $associativeBooks = [
    [
      'name' => 'book one',
      'author' => 'author one',
      'purchaceUrl' => 'https://www.google.com/'
    ],
    [
      'name' => 'book two',
      'author' => 'author two',
      'purchaceUrl' => 'https://www.google.com/'
    ],
    [
      'name' => 'book three',
      'author' => 'author three',
      'purchaceUrl' => 'https://www.google.com/'
    ]
  ];

  
  // functions
  function filter($array, $fn) {
    $filteredArray = [];

    foreach($array as $item) {
      if ($fn($item)) {
        $filteredArray[] = $item;
      };
    };

    return $filteredArray;
  }

  $filteredBooks = filter($associativeBooks, function ($book) {
    return $book['name'] === 'book one';
  });

  require "index.view.php";

?>

