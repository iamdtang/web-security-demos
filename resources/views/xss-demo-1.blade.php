<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS Demo 1</title>
</head>
<body>
  @foreach ($reviews as $review)
    <div>
      <!-- this will do https://www.php.net/manual/en/function.htmlspecialchars.php -->
      <!-- {{$review}} -->
      
      <?php echo htmlspecialchars($review); ?>
    </div>
  @endforeach
</body>
</html>