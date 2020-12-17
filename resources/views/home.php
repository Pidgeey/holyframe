<html>
    <head>
        <title>New app</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="manifest" href="/manifest.json">
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="cart.png">
        <meta name="theme-color" content="green"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="green">
        <meta name="apple-mobile-web-app-title" content="Liste app">
        <meta name="msapplication-TileImage" content="cart.png">
        <meta name="msapplication-TileColor" content="#21c521">
        <meta name="theme-color" content="green"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <main id="app">
          <main-component
          :message="message"
          ></main-component>
        </main>
        <footer>
            <script src="js/app.js"></script>
        </footer>
    </body>
</html>