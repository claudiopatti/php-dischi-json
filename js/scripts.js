const { createApp } = Vue;

createApp({
    data() {
        return {
            message: 'ciao',
            cards: [],
            showCardActive: false
        }
    },
    created () {
        axios
            .get('http://localhost/php-dischi-json/api.php')
            .then((res) => {
                
                this.cards = res.data;
                
                console.log(res.data);
            })
    },
    methods: {
        showCard(i) {
            this.cards[i].showCardActive = true;
            console.log(this.cards[i]);
            
        },
        showCardStop(i){
            this.cards[i].showCardActive = false;
            console.log(this.cards[i].showCardActive);


        },
    }
}).mount('#app');