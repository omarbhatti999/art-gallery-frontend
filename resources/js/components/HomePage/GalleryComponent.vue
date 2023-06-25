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
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                    do
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
                >{{ category.name }}
            </a>
        </div>
        <div class="portfolio-fullwidth">
            <div class="portfolio-grid">
                <div class="dt-sc-portfolio-container isotope">
                    
                        <div
                            @click="galleryDetailPage(item)"
                            v-for="item in count"
                            :key="item.id"
                            class="portfolio nature people street dt-sc-one-fourth home-featured-arts"
                        >
                        
                            <figure>
                                <!-- height="350px" width="200px" alt="" title="" -->
                                <img
                                    src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_100x100cm-Prints_Elastique_Epoxyoncanvas-Limited1_100-.B-artBartStillekensArt4_540x.jpg?v=1658328194"
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
                                            <h5>Title {{ item }}</h5>
                                            <p>A cowboy is a man with guts</p>
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
import GalleryList from "./GalleryList.vue";
export default {
    components: { GalleryList },
    data() {
        return {
            categories: [],
            artCollections: [],
            count: 12,
            baseUrl: "http://192.168.1.54:8000/",
        };
    },
    beforeMount() {
        this.featuredAllArts();
    },
    mounted() {
        this.fetchCategories();
    },
    methods: {
        async fetchCategories() {
            try {
                const response = await api.get("/categories");
                this.categories = response.data.data;
                console.log(this.categories, "cat");
            } catch (error) {
                console.error(error);
            }
        },
        async getArts(id) {
            try {
                const response = await api.get(`category/${id}`);
                if (response.status == 200) {
                    this.artCollections = response.data.data;
                } else {
                    console.log("something went wrong");
                }
            } catch (error) {
                console.log(error);
            }
        },
        async featuredAllArts() {
            const response = await api.get("/featured-all-arts");
            if (response.status == 200) {
                this.artCollections = response.data.data;
                console.log("in parent", this.artCollections);
            } else {
                console.log("something went wrong");
            }
        },

        galleryDetailPage(id){
            console.log("detail id",id);
            this.$router.push({ name: 'GalleryDetail', params: { id: id } });

        }
    },
};
</script>
