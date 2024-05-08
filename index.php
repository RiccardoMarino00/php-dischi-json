<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Music Disk</title>
</head>
<body>
   <section>
     <div id="app">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div v-if="music_disks.length > 0" class="container">
                        <div class="row">
                            <div v-for="disk in music_disks" class="music-card txt-center ">
                                <div class="txt-center">
                                    <img class="img-poster" :src="disk.poster">
                                </div>
                                <p> {{disk.title}} </p>
                                <p class="txt-light"> {{disk.author}} </p>
                                <p class="txt-light"> {{disk.year}} </p>
                                <p class="txt-light"> {{disk.genre}} </p>
                            </div>
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


<style>



    body{
        background: url('./img/green-abstract-geometric-shape-background-free-vector.jpg');
        background-size: cover;
        font-family: "Poppins", sans-serif;
        font-weight: 700;
        font-style: normal;
    }

    .music-card{
        background-color: rgba(10, 91, 12, 0.5);
        width: 20%;
        margin: 10px;
        padding: 18px;
        border-radius: 12px;
    }

    .img-poster{
        width: 200px;
        aspect-ratio: 1/1;
        border-radius: 12px;
        filter: saturate(2);
    }

    .row{
        display: flex;
        flex-wrap: wrap;
    }

    .txt-center{
        text-align: center;
    }

    .txt-light{
        color: rgba(255, 255, 255, 1);
        font-family: "Poppins", sans-serif;
        font-weight: 300;
        font-style: normal;
    }
</style>