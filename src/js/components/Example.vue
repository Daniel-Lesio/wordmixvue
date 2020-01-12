<template>
    <div class="container" style='background : red ; width:100%;height: 100%; '>
        
                        <vueDisplacementSlideshow
                        :images="images"
                        displacement="https://images.pexels.com/photos/3429761/pexels-photo-3429761.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260"
                        :intensity="0.1"
                        :speedIn="1.4"
                        :speedOut="1.4"
                        ease="expo.out"
                        ref="slideshow"
                        />
        
    </div>
</template>

<script>
import vueDisplacementSlideshow from 'vue-displacement-slideshow'
    export default {
        components : {
            vueDisplacementSlideshow
        },
        methods : { 
            init() {
                setInterval(() => {
                    this.$refs.slideshow.next();
                }, 2000);
            }

        },
        mounted() {
          this.init();
        },
        data(){
            return{
                test : 'rerer'
            }
        },
        computed : {
            images(){
                return [
                    'https://images.pexels.com/photos/3429761/pexels-photo-3429761.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260',
                    'https://images.pexels.com/photos/3429761/pexels-photo-3429761.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260'
                ]
            }
        }
    }
</script>