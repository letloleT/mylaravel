<template>
    <div class="container">
        <div class="row">
            <img v-for="img in images" v-bind:scr="img"/>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        },

        data(){
            return{
                images:['https://www.crestwoodflowers.net/gifs/index-flowers.jpg',
                'https://images.pexels.com/photos/54630/japanese-cherry-trees-flowers-spring-japanese-flowering-cherry-54630.jpeg?auto=compress&cs=tinysrgb&h=350',
                'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSZIqHwr3iIcq6wkA0diHbz4POg82IuSBOE_faSnCK1XIU6Dxu5'
                ]
            }
        }
    }
</script>