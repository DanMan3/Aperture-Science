<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quote List</title>
  <style>
    #content_container {
      background-image: url('/QuoteBackground.png'); /* Background image for the page */
      background-size: auto; /* Cover the entire background */
      background-position: center top; /* Center the background image */
      color: #fff; /* Text color for quotes */
      font-family: Arial, sans-serif; /* Font family for text */
    }

    .quote-list {
      list-style-type: none; /* Remove bullet points from the list */
      padding: 0; /* Remove default padding */
    }

    .quote-item {
      margin-bottom: 20px; /* Spacing between quotes */
    }

    .quote-text {
      font-size: 30px; /* Font size for quote text */
      font-style: italic; /* Italic style for quote text */
      margin-bottom: 5px; /* Spacing below quote text */
      color: #dfb537;
    }

    .character-info {
      font-size: 14px; /* Font size for character name and game title */
      font-weight: bold; /* Bold style for character name and game title */
      color: #4d3105;
    }
  </style>
</head>
<body>
  <ul class="quote-list">
    <?php foreach ($quotes as $quote): ?>
      <li class="quote-item">
        <div class="quote-text"><?= $quote['post_content'] ?></div>
        <div class="character-info"><?= $quote['character'] ?></div>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
<?= $this->endSection() ?>