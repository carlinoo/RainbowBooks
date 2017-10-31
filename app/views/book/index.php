<div class="row">
  <div class="col s12 m8 l6 offset-m2 offset-l3">
    <div class="card search-card">
      <form action="<?php echo path('book/index'); ?>" method="get">
        <input type="text" name="search_input" id="search_input" class="browser-default search_input"></input>
        <button class="right" id="search_button" ><i class="material-icons">search</i></button>
      </form>
    </div>
  </div>
</div>

<div class="row">

  <?php foreach ($books as $book): ?>
    <div class="col s6 m6 l3">
      <div class="card book-card">
        <div class="card-image">
            <img class="activator waves-effect waves-block waves-light" src="<?php echo image_path('book-cover.svg'); ?>">
            <a class="btn-floating halfway-fab waves-effect waves-light"><i class="material-icons" onclick="location.href = '<?php echo path('book/reserve/' . $book->id . ''); ?>';"><?php echo $book->reserved_by_icon(); ?></i></a>
          </div>

          <div class="card-content">
            <span class="card-title"><?php echo $book->title; ?></span>
            <p><?php echo $book->author; ?></p>
            <p>Edition <?php echo $book->edition; ?></p>
            <p><?php echo $book->year; ?></p>
          </div>

          <div class="card-reveal">
        <span class="card-title grey-text text-darken-4"><?php echo $book->title; ?><i class="material-icons right">close</i></span>
        <p class=" grey-text text-darken-4"><b>Author:</b> <?php echo $book->author; ?></p>
        <p class=" grey-text text-darken-4"><b>Edition</b> <?php echo $book->edition; ?></p>
        <p class=" grey-text text-darken-4"><b>Year:</b> <?php echo $book->year; ?></p>
        <p class=" grey-text text-darken-4"><b>ISBN:</b> <?php echo $book->ISBN; ?></p>
        <p class=" grey-text text-darken-4"><b>Category:</b> <?php echo $book->category->description; ?></p>
      </div>
      </div>
    </div>
  <?php endforeach; ?>
</div>
