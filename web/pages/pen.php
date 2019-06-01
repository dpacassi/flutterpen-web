<?php
  include_once './data/flutterpens.php';

  $flutterPen = $flutterPens['/pens/' . $args];
  $code = file_get_contents('./data/' . $flutterPen['dart_code']);
?>

<main class="pen">
  <div class="content-wrap">
    <section>
      <article>
        <h1><?php print $flutterPen['title']; ?></h1>
        <h2>by <a href="<?php print $flutterPen['github']; ?>" target="_blank"><?php print $flutterPen['author']; ?></a></h2>

        <div class="grid">
          <div class="col">
            <img src="<?php print $flutterPen['screenshot']; ?>" alt="<?php print $flutterPen['title']; ?>" title="<?php print $flutterPen['title']; ?>" />
          </div>
          <div class="col">
            <pre><code class="dart"><?php print $code; ?></code></pre>
          </div>
          <div class="col">
            <img src="<?php print $flutterPen['qrcode_file']; ?>" alt="QR Code" title="QR Code" />
          </div>
        </div>

        <footer>
          <a class="button button--primary" href="/explore">Back</a>
        </footer>
      </article>
    </section>
  </div>
</main>
