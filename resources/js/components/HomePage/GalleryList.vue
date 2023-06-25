<template>
    <h5>{{ arts[0].title }}</h5>
    <div class="portfolio-fullwidth">
            <div class="portfolio-grid">
                <div class="dt-sc-portfolio-container isotope">
                    <div
                        v-for="item in arts"
                        :key="item.id"
                        class="portfolio nature people street dt-sc-one-fourth home-featured-arts"
                    >
                        <figure>
                            <img height="350px" width="200px" alt="" title=""
                            :src=item.artImages[0].imagePath
                            />
                            <figcaption>
                                <div class="portfolio-detail">
                                    <div class="views">
                                        <a
                                            class="fa fa-camera-retro"
                                            data-gal="prettyPhoto[gallery]"
                                            href="http://via.placeholder.com/1250x1160&text=Portfolio+Image2"
                                        ></a
                                        ><span>7</span>
                                    </div>
                                    <div class="portfolio-title">
                                        <h5><a>{{ item.title }}</a></h5>
                                        <p>A cowboy is a man with guts</p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
</template>
<script>
import api from "../../services/api";
export default {
    components: {},
    props:['items'],
    data() {
        return {
            arts:[],
            baseUrl: "http://192.168.1.54:8000/",
        };
    },
    watch: {
    items: {
      handler(items) {
       this.arts = items
      },
      deep: true
    }
  },
    mounted(){
    },
    beforeMount(){


    },
    mounted() {

    },
    methods: {

    },
};
</script>
