<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="theme-color" content="#002B49" />

  <title><?= htmlspecialchars($titulo) ?></title>
  <meta name="description" content="<?= htmlspecialchars($descripcion) ?>" />

<?php if (!empty($extra_meta)) echo $extra_meta; ?>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700;800&family=Montserrat:wght@300;400;500;600;700&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <noscript><link href="https://fonts.googleapis.com/css2?family=Lexend:wght@400;700;800&family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet"></noscript>

  <link rel="stylesheet" href="/assets/css/<?= isset($css_file) ? htmlspecialchars($css_file) : 'styles.css' ?>">

  <!-- GTM snippet aquí -->
</head>
