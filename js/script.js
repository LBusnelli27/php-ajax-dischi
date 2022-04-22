const app = new Vue({
    el: '#app',
    data: {
        albums : []
    },
    mounted(){
        axios
        .get('http://localhost:8888/php-ajax-dischi/server/controller.php')
        .then((response) => {
            this.albums = response.data.results;
        }).catch((error) => {
            console.warn(error);
        });
    }
})