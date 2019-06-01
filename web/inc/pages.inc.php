<?php

function getPage($page, $args=NULL) {
  include_once './inc/header.inc.php';
  include_once './pages/' . $page . '.php';
  include_once './inc/footer.inc.php';
}

function getFrontPage() {
  getPage('front');
}

function getExplorePage() {
  getPage('explore');
}

function getPenPage($args) {
  getPage('pen', $args);
}
