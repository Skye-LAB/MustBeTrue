import axios from 'axios'
import Vue from 'vue'



new Vue({
    el: '#proj',
    data: {
        menu: {
            id: '',
            qty: '',
            harga: '',
            namaMenu: ''
        }
    },
    mounted() {
        this.menu.id = 4;
    },
    watch: {
        'menu.id': function () {
            if (this.menu.id) {
                this.getMenu()
            }
        }
    },
    methods: {
        getMenu() {
            axios.post(`/api/menu/${this.menu.id}`).then((response) => {
                this.menu = response.data
            }).catch(err){
                
            }
        }
    }

})
