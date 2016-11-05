<?php
return function($site, $pages, $page) {
  return array(
    bio => $page->documents()->filterBy('filename', '*=', 'bio')->first(),
    publications => $site->find('publications')->children()->visible()->filterBy('artists',$page->slug())->count(),
    press => $page->children()->find('press')->files()->count(),
    exhibitions => $site->find('exhibitions')->children()->visible()->filterBy('artists',$page->slug())->count()
  );
};
?>
