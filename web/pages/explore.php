<?php
  include_once './data/flutterpens.php';
?>

<main class="explore">
  <div class="content-wrap">
    <section>
      <h1>Explore</h1>

      <ul class="flutter-pens">
        <?php foreach ($flutterPens as $url => $flutterPen) { ?>
          <li>
            <a href="<?php print $url; ?>">
              <article>
                <img src="<?php print $flutterPen['screenshot']; ?>" alt="<?php print $flutterPen['title']; ?>" title="<?php print $flutterPen['title']; ?>" />
                <h2><?php print $flutterPen['title']; ?></h2>
                <h3><?php print $flutterPen['author']; ?></h3>
              </article>
            </a>
          </li>
        <?php } ?>
      </ul>
    </section>
  </div>
</main>
