// VUE
import Vue from 'vue';
// AXIOS
import Axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        albums: [],
    },
    created() {
        Axios.get('http://localhost/php-ajax-dischi/src/partials/database.php')
        .then(response => {
            // handle success
            console.log(response.data);
            this.albums = response.data;
        })
        .catch(error => {
            // handle error
            console.log(error);
        });
    },
});