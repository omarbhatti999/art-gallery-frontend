<template>
    <div id="main">
        <div class="breadcrumb">
            <!-- *BreadCrumb Starts here** -->
            <div class="container">
                <h2>Elephantus <span>Art Gallery</span></h2>
            </div>
        </div>
        <!-- *BreadCrumb Ends here** -->
        <section id="primary" class="content-full-width">
            <!-- **Primary Starts Here** -->
            <div class="fullwidth-section">
                <!-- **Full-width-section Starts Here** -->
                <div class="container">
                    <div
                        class="main-title animate"
                        data-animation="pullDown"
                        data-delay="100"
                    >
                        <h3>Gallery</h3>
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
                        >{{ category.name }}
                    </a>
                </div>
                <div class="portfolio-fullwidth">
                    <!-- **portfolio-fullwidth Starts Here** -->
                    <div class="portfolio-grid">
                        <div class="dt-sc-portfolio-container isotope">
                            <!-- **dt-sc-portfolio-container Starts Here** -->
                            <div
                                class="portfolio nature still-life dt-sc-one-fourth"
                                v-for="item in count"
                                :key="item"
                                >
                                <figure>
                                    <!-- height="350px" width="250px" -->
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_100x100cm-Prints_Elastique_Epoxyoncanvas-Limited1_100-.B-artBartStillekensArt4_540x.jpg?v=1658328194"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/500x800&text=Portfolio+Image1"
                                                ></a
                                                ><span>3</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail.html"
                                                        >Title {{ item }}</a
                                                    >
                                                </h5>
                                                <p>
                                                    Sample text here looks good
                                                </p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- <div
                                class="portfolio nature people street dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1250x1160&text=Portfolio+Image2"
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
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-lhs.html"
                                                        >Brave Man</a
                                                    >
                                                </h5>
                                                <p>
                                                    A cowboy is a man with guts
                                                </p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio street landscapes still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1300x900&text=Portfolio+Image3"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/1300x900&text=Portfolio+Image3"
                                                ></a
                                                ><span>9</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-rhs.html"
                                                        >Mountain Ride</a
                                                    >
                                                </h5>
                                                <p>the swagger of a cowboy</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio nature still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/700x600&text=Portfolio+Image4"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/700x600&text=Portfolio+Image4"
                                                ></a
                                                ><span>5</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail.html"
                                                        >River Ride</a
                                                    >
                                                </h5>
                                                <p>Live Free, Ride Hard!!</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio people still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1600x1300&text=Portfolio+Image5"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/1600x1300&text=Portfolio+Image5"
                                                ></a
                                                ><span>6</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-lhs.html"
                                                        >Ride Hard</a
                                                    >
                                                </h5>
                                                <p>Saddle your horse</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio people still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1200x1500&text=Portfolio+Image6"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/1200x1500&text=Portfolio+Image6"
                                                ></a
                                                ><span>1</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-rhs.html"
                                                        >Black Rider</a
                                                    >
                                                </h5>
                                                <p>No reason to ride a horse</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio people nature still-life street dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1500x2000&text=Portfolio+Image7"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/1500x2000&text=Portfolio+Image7"
                                                ></a
                                                ><span>5</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail.html"
                                                        >Stay single</a
                                                    >
                                                </h5>
                                                <p>Make Way</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio nature people street still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/1600x1100&text=Portfolio+Image8"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/1600x1100&text=Portfolio+Image8"
                                                ></a
                                                ><span>12</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-lhs.html"
                                                        >Born to Ride</a
                                                    >
                                                </h5>
                                                <p>
                                                    Cowboys are born, ain't
                                                    made!
                                                </p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <div
                                class="portfolio street nature people still-life dt-sc-one-fourth"
                            >
                                <figure>
                                    <img
                                        src="http://via.placeholder.com/650x450&text=Portfolio+Image9"
                                        alt=""
                                        title=""
                                    />
                                    <figcaption>
                                        <div class="portfolio-detail">
                                            <div class="views">
                                                <a
                                                    class="fa fa-camera-retro"
                                                    data-gal="prettyPhoto[gallery]"
                                                    href="http://via.placeholder.com/650x450&text=Portfolio+Image9"
                                                ></a
                                                ><span>15</span>
                                            </div>
                                            <div class="portfolio-title">
                                                <h5>
                                                    <a
                                                        href="gallery-detail-with-rhs.html"
                                                        >Stand Tall</a
                                                    >
                                                </h5>
                                                <p>Hard to Settle!!</p>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div> -->
                        </div>
                        <!-- **dt-sc-portfolio-container Ends Here** -->
                    </div>
                </div>
                <!-- **portfolio-fullwidth Ends Here** -->
                <div class="aligncenter">
                    <a
                        href="#"
                        class="load-more-btn loadmore dt-sc-button medium type3 with-icon"
                        ><i class="fa fa-picture-o"></i>
                        <span> load more </span>
                    </a>
                </div>
                <div class="dt-sc-hr-invisible-small"></div>
            </div>
            <!-- **Full-width-section Ends Here** -->
        </section>
        <!-- **Primary Ends Here** -->

        <Footer></Footer>
    </div>
    <!-- Main Ends Here-->
</template>

<script>
import api from "../services/api.js";
import Footer from "../components/Footer.vue";
export default {
    components: { Footer },
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
    },
};
</script>
