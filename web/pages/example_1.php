<main>
  <pre><code class="dart">
    Widget build(BuildContext context) {
      return new MaterialApp(
        title: "MyApp",
        theme: new ThemeData(
          primaryColor: Color(0xFFD1524F),
          accentColor: Color(0xFFF61332),
        ),
        debugShowCheckedModeBanner: false,
        home: new contentWrapper(cameras),
      );
    }
  </code></pre>
</main>
