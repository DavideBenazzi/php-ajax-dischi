// VUE
import Vue from 'vue';
// AXIOS
import axios from 'axios';

const app = new Vue ({
    el: '#app',
    data: {
        albums: [],
        artists: [],
        selection: 'all',
    },
    created() {
        axios.get( window.location.href + '/src/partials/database.php' )
        .then(response => {
            // console.log(response.data);
            this.albums = response.data.albums;
            this.artists = response.data.artists;
        })
        .catch(error => {
            console.log(error);
        });
    },
    methods: {
        changeSelection() {
            axios.get( window.location.href + '/src/partials/database.php' , {
                params: {
                    userSelection: this.selection,
                },
            })
            .then(response => {
                // console.log(response.data);
                this.albums = response.data.albums;
                this.artists = response.data.artists;
            })
            .catch(error => {
                console.log(error);
            });           
        },
    },
});





