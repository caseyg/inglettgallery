<?php

$caption = []; // Let's make a caption

$image_fields = ['image_title', 'image_date', 'image_media', 'image_dimensions', 'image_dimensions_framed', 'image_edition_info']; // Using these image fields

foreach($image_fields as $image_field):
  if ($image->$image_field()->isNotEmpty()):
    array_push($caption, $image->$image_field()->html()); // By collecting fields which are not empty for this image
  endif;
endforeach;

$caption_length = count($caption);
$count = 0;

foreach($caption as $image_field): $count++;
  echo $image_field; if ($count != $caption_length) echo ", "; // And outputting as a comma separated list
endforeach;

?>
