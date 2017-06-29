<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <ul>
      <li><a href="/controllers/about.php">About us</a></li>
      <li><a href="/controllers/contact.php">Contact us</a></li>

    </ul>
    <ul>
      <?php foreach ($tasks as $task) : ?>
        <li>
          <?php if ($task->completed) :?>
              <strike>
          <?php endif; ?>
          <?= $task->description; ?>
          <?php if ($task->completed) :?>
              </strike>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
    </ul>
  </body>
</html>
