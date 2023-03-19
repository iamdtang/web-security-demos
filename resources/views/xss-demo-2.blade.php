<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>XSS Demo 2</title>
</head>
<body>
  <form method="GET" action="/xss-demo-2">
    <input type="search" id="search-input" name="q" />
  </form>
  <div id="results">
    Search results for <?php echo $q ?>
    <!-- show results here -->
  </div>
</body>
</html>