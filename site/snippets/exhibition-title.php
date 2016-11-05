<?php
if ($exhibition->untitled()->isFalse()) { // if display title is set to false
  $artists = $exhibition->artists()->split(',');
  $additional_artists = $exhibition->additional_artists()->split(',');

  $count = count($artists);
  $index = 0;

  foreach($artists as $artist){ $index++; // collect pages of artist names
    $artist = $pages->find('artists')->children()->find($artist);

    echo $artist->first_name() . " " . $artist->last_name(); // display artist name

    if ($count != $index) {
      echo " | "; // and separate with a horizontal bar
    }
  }

  $count = count($artists);
  $index = 0;

  foreach($additional_artists as $artist){ $index++; // collect pages of artist names
    echo $artist;
  }
} else {
  echo $exhibition->title()->widont(); //otherwise show exhibition title
}
?>
