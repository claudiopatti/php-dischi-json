
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
             <!-- css  -->
        <link rel="stylesheet" href="./css/style.css">
        <!-- bootstrap  -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <title>PHP Dischi JSON</title>
    </head>
    <body>
        
        <main id="app">
            <div class="container w-100 h-100 position-relative">
                <div class="row g-0 ">
                    <div v-for="(card, index)  in cards" @click="showCard(index)" class="col-12 col-sm-6 col-md-4 mt-4 position-relative d-flex justify-content-center">
                        <div class="card text-center" style="width: 15rem;">
                            <img  :src="card.poster" class="card-img-top" :alt="card.title">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ card.title }}</h3>
                                <p class="card-text">{{ card.author }}</p>
                                <h5 class="card-title">{{ card.year }}</h5>
                            </div>
                        </div>
                    </div>
                <div v-for="(card, index)  in cards" >
                    <div v-if="cards[index].showCardActive == true" class="showCardAbsolute w-100 h-100 bg-opacity z-1 position-absolute ">
                        <div @click="showCardStop(index)" class="border border-white z-2 position-absolute p-3 text-white end-0">
                            x
                        </div>
                        <div  class="card  " style="width: 15rem;">
                            <img :src="card.poster" class="card-img-top" :alt="card.title">
                            <div class="card-body text-center">
                                <h3 class="card-title">{{ card.title }}</h3>
                                <p class="card-text">{{ card.author }}</p>
                                <h5 class="card-title">{{ card.year }}</h5>
                            </div>
                        </div>
    
                    </div>

                </div>
            </div>
        </main>


        <!-- vue -->
        <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

        <!-- axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

        <!-- js  -->
         <script src="js/scripts.js"></script>

         <!-- boostrap js  -->
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>