<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Vuebnb</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ asset('css/vue-style.css') }}" type="text/css">
  <script type="text/javascript">
    window.vuebnb_listing_model = "{!! addslashes(json_encode($model)) !!}"    
    // console.log(window.vuebnb_listing_model);
  </script>
</head>
<body>
<div id="toolbar">
  <img class="icon" src="{{ asset('images/logo.png') }}">
  <h1>vuebnb</h1>
</div>
<div id="app">
  
</div>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>