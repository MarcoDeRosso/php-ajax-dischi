<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
<body>
<header>
    <img src="./img/spotify-logo.png" alt="spotify-logo">
    <div>
        <label class="mx-2" for="genre">Cerca per genere:</label>
        <select v-model="searchString" name="genre" @change="$emit('search', searchString)" class="me-2">
            <option value="">All</option>
        </select>
    </div>
    </header>
<div class="container">
    <div class="row">
        <di class="albums-col">
            <?php 

            require_once __DIR__ . "/database/database.php";
            foreach($database as $item) {
                echo
                "<div class=\"inner-container\">
                    <img class=\"album-img\" src=\"{$item['poster']}\" alt=\"image of {$item['title']}\">
                    <div class=\"title my-3\">{$item['title']}</div>
                    <div class=\"author\">{$item['author']}</div>
                    <div class=\"year\">{$item['year']}</div>
                </div>";
            };

            ?>

        </di>

    </div>
</div>
    
</body>
</html>