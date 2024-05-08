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
                            <p> {{disk.title}} </p>
                            <p> {{disk.author}} </p>
                            <p> {{disk.year}} </p>
                            <img :src="disk.poster"> 
                            <p> {{disk.genre}} </p>
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