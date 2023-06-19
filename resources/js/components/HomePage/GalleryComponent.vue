<template>
    <div class="fullwidth-section">
                <!-- **Full-width-section Starts Here** -->
                <div class="container">
                    <div
                        class="main-title animate"
                        data-animation="pullDown"
                        data-delay="100"
                    >
                        <h2 class="aligncenter">Gallery</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do
                        </p>
                    </div>
                </div>

                <div class="dt-sc-sorting-container">
                <a
                        data-filter=".all"
                        class="type1 dt-sc-button animate active-sort"
                        data-animation="fadeIn"
                        data-delay="100"
                        >All</a
                    >
                    <a
                        v-for="category in categories"
                        :key="category.id"
                        data-filter=".all"
                        class="type1 dt-sc-button animate"
                        data-animation="fadeIn"
                        data-delay="100"
                        @click="getArts(category.id)"
                        >{{ category.name }} </a
                    >
                </div>
                    <div class="portfolio-fullwidth">
                    <div class="portfolio-grid">
                        <div class="dt-sc-portfolio-container isotope">
                            <div

                            v-for="artCollection in artCollections"
                            :key="artCollection.id"
                                class="portfolio nature people street dt-sc-one-fourth home-featured-arts"
                            >
                                <figure
                                >
                                    <img height="350px" width="200px"
                                        :src=baseUrl+artCollection.artImages[0]
                                        alt=""
                                        title=""
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
                                                <h5><a>{{artCollection.title}}</a></h5>
                                                <p>
                                                    A cowboy is a man with guts
                                                </p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</template>
<script>
import api from "../../services/api";
export default {
    components:{

    },
    data(){
        return{
            categories:[],
            artCollections:[],
            count:2,
            baseUrl : 'http://192.168.1.103:8002/',

        };
    },
    mounted(){
       this.fetchCategories();
       this.getArts(2)
    },
    methods:{
     async fetchCategories(){
            try {
                const response = await api.get("/categories");
                this.categories = response.data.data
            } catch (error) {
                console.error(error);
            }
        },
        async getArts(id){
            try {

            } catch (error) {
                console.log(error);
            }
            const response = await api.get(`category/${id}`);
            if(response.status == 200){
                this.artCollections = response.data.data;
                console.log(this.artCollections);
            } else{
                console.log("something went wrong");
            }
        }
    }
};
</script>
