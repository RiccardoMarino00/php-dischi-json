const { createApp } = Vue

  createApp({
    data() {
      return {
        message: 'Hello Vue!',
        music_disks: [],
      }
    },
    methods: {
        fetchDisk() {
            axios.get('./server.php').then((res)=> {
                console.log(res.data)
                this.music_disks = res.data
            })
        },
    },
    created(){
        this.fetchDisk()

    },

  }).mount('#app')