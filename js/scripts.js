const { createApp } = Vue;

createApp({
    data() {
        return {
            message: 'ciao',
            cards: [],
        }
    },
    created () {
        axios
            .get('http://localhost/php-dischi-json/api.php')
            .then((res) => {
                
                this.cards = res.data;
                
                console.log(res.data);
            })
    }
}).mount('#app');