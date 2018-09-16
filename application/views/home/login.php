<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <title>Login</title>
 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="your google client id goes here">   
  </head>

  <body>
  <a href="#" onclick="signOut();">Sign out</a>
    <form class="form-signin">
      <div class="text-center mb-4">
        <img class="mb-4" src="" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Floating labels</h1>
        <p>Build form controls with floating labels via the <code>:placeholder-shown</code> pseudo-element. <a href="https://caniuse.com/#feat=css-placeholder-shown">Works in latest Chrome, Safari, and Firefox.</a></p>
      </div>
      <div class="container fluid">
        <div class="col-md-12">
          <div class="g-signin2" data-onsuccess="onSignIn" ></div>          
        </div>
      </div>
      <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2018</p>
    </form>

    <script>
      function signOut() {
        var auth2 = gapi.auth2.getAuthInstance();
        auth2.signOut().then(function () {
          console.log('User signed out.');
        });
      }
      var email;
      function onSignIn(googleUser) {
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("Email: "+ id_token);
        var xhr = new XMLHttpRequest();
        xhr.open('POST', '<?php echo URL::site('welcome/authenticate') ?>');
        xhr.send('idtoken=' + id_token);
        xhr.onload = function() {
          console.log('Response: ' + xhr.responseText);
        };

      }
      console.log("Email: "+ email);
    </script>
    <a href="<?php echo URL::site('welcome/index') ?>">home</a>
  </body>
</html>
