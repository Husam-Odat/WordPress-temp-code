<?php
// echo '<h3 class="widget-title">Statistics</h3>';
$books_cats = get_categories(array('child_of' => 3)); // 11 => Books Term ID
$books_count = 0;
foreach ($books_cats as $books_cat) :
  $books_count += $books_cat->category_count;
endforeach;

// echo $books_count;

$games_cats = get_categories(array('child_of' => 6)); // 6 => Games Term ID
$games_count = 0;
foreach ($games_cats as $games_cat) :
  $games_count += $games_cat->category_count;
endforeach;

// echo $games_count;

$movies_cats = get_categories(array('child_of' => 11)); // 14 => Movies Term ID
$movies_count = 0;
foreach ($movies_cats as $movies_cat) :
  $movies_count += $movies_cat->category_count;
endforeach;

// echo $movies_count;

// echo "<pre>";
// print_r($books_cats);
// echo "</pre>";
?>

<div class="widget stats">
  <h3 class="widget-title">
    <i class="fa-solid fa-chart-simple"></i>
    Statistics
  </h3>
  <ul>
    <li>
      <span>
        <i class="fa-solid fa-book"></i>
        Books
      </span>
      <span><?php echo $books_count; ?></span>
    </li>
    <li>
      <span>
        <i class="fa-solid fa-gamepad"></i>
        Games
      </span>
      <span><?php echo $games_count; ?></span>
    </li>
    <li>
      <span>
        <i class="fa-solid fa-film"></i>
        Movies
      </span>
      <span><?php echo $movies_count; ?></span>
    </li>
  </ul>
</div>