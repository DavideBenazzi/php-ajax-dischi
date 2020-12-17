<?php 
// INCLUSIONE FOGLIO DATABASE PHP 
include __DIR__ . '/src/partials/database.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./dist/css/style.css">
    <title>php-ajax-dischi</title>
</head>
<body>
    <!-- VUE -->
    <div id="app">
        <!-- CATALOG -->
        <div class="catalog">
            <!-- HEADER -->
            <header>
                <div class="container">
                    <img src="./img/logo.png" alt="logo">
                </div>
            </header>
            <!-- MAIN -->
            <main>
                <div class="container">
                    <ul class="list">
                        <?php foreach ($database as $data) { ?>
                            <li>
                                <div class="album">
                                    <img src="<?php echo $data["poster"]; ?>" alt="<?php echo $data["author"]; ?>" >
                                </div>
                                <h2>
                                    <?php echo $data["title"];?>
                                </h2>
                                <h3>
                                    <?php echo $data["author"];?>
                                </h3>
                                <h2>
                                    <?php echo $data["year"];?>
                                </h2>
                                <h3>
                                    <?php echo $data["genre"];?>
                                </h3>
                            </li>
                        <?php }; ?>
                    </ul>
                </div>
            </main>
        </div>
    </div>

    <!-- JS -->
    <script src="./dist/js/main.js"></script>
</body>
</html>