<div class="row">
  <?php foreach ($reservations as $reservation): ?>

  <div class="col s6 m6 l3">
    <div class="card book-card">
      <div class="card-image">
        <img class="activator waves-effect waves-block waves-light" src="<?php echo image_path('book-cover.svg'); ?>">
        <a href='<?php echo path('book/unreserve/' . $reservation->book->id . ''); ?>' class="btn-floating halfway-fab waves-effect waves-light"><i class="material-icons">close</i></a>
      </div>

      <div class="card-content">
        <span class="card-title truncate"><?php echo $reservation->book->title; ?></span>
        <p><?php echo $reservation->book->author; ?></p>
        <p>Edition <?php echo $reservation->book->edition; ?></p>
        <p><?php echo $reservation->book->year; ?></p>
      </div>

      <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><?php echo $reservation->book->title; ?><i class="material-icons right">close</i></span>
        <p class=" grey-text text-darken-4"><b>Author:</b> <?php echo $reservation->book->author; ?></p>
        <p class=" grey-text text-darken-4"><b>Edition</b> <?php echo $reservation->book->edition; ?></p>
        <p class=" grey-text text-darken-4"><b>Year:</b> <?php echo $reservation->book->year; ?></p>
        <p class=" grey-text text-darken-4"><b>ISBN:</b> <?php echo $reservation->book->ISBN; ?></p>
        <p class=" grey-text text-darken-4"><b>Category:</b> <?php echo $reservation->book->category->description; ?></p>
      </div>
    </div>
  </div>

  <?php endforeach; ?>
</div>
