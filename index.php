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
   <section>
     <div id="app">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div v-if="music_disks.length > 0">
                        <div v-for="disk in music_disks">
                            <p>   </p>
                            <p>  </p>
                            <p>  </p>
                            <img src=""> 
                            <p>  </p>
                       </div>
                    </div>
                    <span v-else>Non ci sono risultati</span>
                </div>
            </div>
        </div>
     </div>
        
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
        <script src="./app.js"></script>
   </section>
   
    
</body>
</html>