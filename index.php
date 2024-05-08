<?php

$music_disks = [
    [
        "title"=> "New Jersey",
        "author"=> "Bon Jovi",
        "year"=> 1988,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/51sBr4IWDwL.jpg",
        "genre"=> "Rock"
    ],
    [
        "title"=> "Live at Wembley 86",
        "author"=> "Queen",
        "year"=> 1992,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/71g40mlbinL._SX355_.jpg",
        "genre"=> "Pop"
    ],
    [
        "title"=> "Ten\"s Summoner\"s Tales",
        "author"=> "Sting",
        "year"=> 1993,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/411BQR6BHRL.jpg",
        "genre"=> "Pop"
    ],
    [
        "title"=> "Steve Gadd band",
        "author"=> "Steve Gadd Band",
        "year"=> 2018,
        "poster"=> "https://m.media-amazon.com/images/I/81UtLzBDoEL._SS500_.jpg",
        "genre"=> "Jazz"
    ],
    [
        "title"=> "Brave new World",
        "author"=> "Iron Maiden",
        "year"=> 2000,
        "poster"=> "https://upload.wikimedia.org/wikipedia/en/0/03/Iron_Maiden_-_Brave_New_World.jpg",
        "genre"=> "Metal"
    ],
    [
        "title"=> "One more car, one more rider",
        "author"=> "Eric Clapton",
        "year"=> 2002,
        "poster"=> "https://images-na.ssl-images-amazon.com/images/I/81MDAIdh78L._SY355_.jpg",
        "genre"=> "Rock"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>Music Disk</title>
</head>
<body>
   <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
   <section>
        <div id="app">{{ message }}</div>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                    for($i = 0; $i < count($music_disks); $i++){
                        $disk = $music_disks[$i];
                        $title = $disk['title'];
                        $author = $disk['author'];
                        $year = $disk['year'];
                        $poster = $disk['poster'];
                        $genre = $disk['genre'];
                        var_dump($title, $author, $year, $poster, $genre);

                    ?>
                       <div>
                        <p> <?php echo $title; ?>  </p>
                        <p> <?php echo $author; ?> </p>
                        <p> <?php echo $year; ?> </p>
                        <img src="<?php echo $poster; ?>"> 
                        <p> <?php echo $genre; ?> </p>
                       </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
        <script src="./app.js"></script>
   </section>
   
    
</body>
</html>