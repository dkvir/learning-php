<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Demo</title>
  </head>
  <body>

  <!-- variables -->
    <h1>
      <?php 
        echo $message;
      ?>
    </h1>

    <h1>
      <?= $message; ?>
    </h1>

    <!-- arrays -->
    <ul>
      <?php foreach ($books as $book) {
        echo "<li>{$book}</li>";
      }
      ?>
    </ul>

    <ul>
      <?php foreach ($books as $book) : ?>
        <li><?= $book ?> </li>
      <?php endforeach; ?>
    </ul>


    <!-- associative arrays -->
    <ul>
      <?php foreach ($associativeBooks as $book): ?>
        <li>
          <a href="<?= $book['purchaceUrl']; ?>">
            <?= $book['name']; ?>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>


    <!-- functions -->
    <ul>
      <?php foreach ($filteredBooks as $book): ?>
        <li>
          <a href="<?= $book['purchaceUrl']; ?>">
            <?= $book['name']; ?>
          </a>
          
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
