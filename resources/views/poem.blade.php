<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kirby Marquez Poetry">
    <title>Kirby Marquez | Poems</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="poem-container">
    <div class="poem-content-container">
        <a href="/" class="back-button"></a>
        <div class="poem-title">{{ $poem->title ?? '' }}</div>
        <div class="poem-body">{{ $poem->body ?? '' }}</div>
      </div>
    </div>
  </body>
</html>

