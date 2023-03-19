<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Write a review</title>
</head>
<body>
  <form action="/write-a-review" method="POST">
    <!-- 
      Toggle @csrf below.

      Laravel automatically generates a CSRF "token" for each 
      active user session managed by the application. This token 
      is used to verify that the authenticated user is the person
      actually making the requests to the application. Since this
      token is stored in the user's session and changes each time
      the session is regenerated, a malicious application is unable
      to access it.

      https://laravel.com/docs/10.x/csrf#csrf-x-csrf-token
    -->
    @csrf

    <div>
      <input type="text" placeholder="Review title" />
    </div>
    <div>
      <textarea>Review body</textarea>
    </div>
    <div>
      <button type="submit">Submit</button>
    </div>
  </form>
</body>
</html>