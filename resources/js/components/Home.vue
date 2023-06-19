<template>
    <div class="slider-container">
        <!-- <div class="slider fullwidth-section parallax"> -->
        <video autoplay loop muted class="slider fullwidth-section parallax">
            <source src="images/Artwork.mp4" type="video/mp4" />
        </video>
        <!-- </div> -->
    </div>
    <div id="main">
        <section id="primary" class="content-full-width">
            <!-- **Primary Starts Here** -->

            <div class="dt-sc-hr-invisible-small"></div>

            <!-- Gallery HomePage Component Here -->
            <GalleryComponent></GalleryComponent>
            <div class="clear"></div>
            <div class="container">
                <div
                    class="main-title animate"
                    data-animation="pullDown"
                    data-delay="100"
                >
                    <h2 class="aligncenter">Art Work</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do
                    </p>
                </div>
            </div>
            <div class="fullwidth-section">
                <!-- **Full-width-section Starts Here** -->
                <div class="blog-section">
                    <article class="blog-entry">
                        <div class="entry-thumb">
                            <ul class="blog-slider">
                                <li>
                                    <img
                                        src="images/gallery/sculpture.webp"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/1copy_720x.jpg?v=1684578499" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/MOBUziWhite_720x.jpg?v=1684578499" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/MOBUziWhite2_720x.jpg?v=1684578499" alt="" title=""> </li> -->
                            </ul>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3>
                                    <router-link to="/gallery-detail"
                                        ><a>Sculpture</a></router-link
                                    >
                                </h3>
                            </div>
                            <div class="entry-body">
                                <p>
                                    <b>Acrylic painting</b>, technique in which
                                    pigments are mixed with hot, liquid wax.
                                    After all of the colours have been applied
                                    to the painting surface, a heating element
                                    is passed over them until the individual
                                    brush or spatula marks fuse into a uniform
                                    film.
                                </p>
                            </div>
                            <router-link to="/gallery-detail"
                                ><a class="type1 dt-sc-button small"
                                    >View Gallery<i
                                        class="fa fa-angle-right"
                                    ></i></a
                            ></router-link>
                        </div>
                    </article>
                </div>

                <div class="blog-section">
                    <article class="blog-entry type2">
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3>
                                    <router-link to="gallery-detail-left"
                                        ><a>Never Seen Before</a></router-link
                                    >
                                </h3>
                            </div>
                            <div class="entry-body">
                                <p>
                                    <b>Encaustic painting</b>, technique in
                                    which pigments are mixed with hot, liquid
                                    wax. After all of the colours have been
                                    applied to the painting surface, a heating
                                    element is passed over them until the
                                    individual brush or spatula marks fuse into
                                    a uniform film.
                                </p>
                            </div>
                            <router-link to="/gallery-detail-left"
                                ><a class="type1 dt-sc-button small"
                                    >View Gallery<i
                                        class="fa fa-angle-right"
                                    ></i></a
                            ></router-link>
                        </div>
                        <div class="entry-thumb">
                            <ul class="blog-slider">
                                <li>
                                    <img
                                        src="images/gallery/never.webp"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/IMG_5320_720x.jpg?v=1684578542" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/DSC09152copy2_360x.jpg?v=1684406626" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/files/IMG_5382_720x.jpg?v=1684578542" alt="" title=""> </li> -->
                            </ul>
                        </div>
                    </article>
                </div>

                <div class="blog-section">
                    <article class="blog-entry">
                        <div class="entry-thumb">
                            <ul class="blog-slider">
                                <li>
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/Aurum150_-150x150x6cm4_720x.png?v=1658332345"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <li>
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/Argenti100_-100x100x6cm4_540x.png?v=1658332157"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <li>
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/Argenti100_-100x100x6cm3_720x.png?v=1658332157"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <li>
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/Argenti100_-100x100x6cm1_720x.png?v=1658332157"
                                        alt=""
                                        title=""
                                    />
                                </li>
                                <li>
                                    <img
                                        src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/Argenti100_-100x100x6cm-SilverLeaf_Varnishoncanvasframedblack-Limited1_25_720x.png?v=1658332157"
                                        alt=""
                                        title=""
                                    />
                                </li>
                            </ul>
                        </div>
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3>
                                    <router-link to="/gallery-detail-right"
                                        ><a>Monochrome</a></router-link
                                    >
                                </h3>
                            </div>
                            <div class="entry-body">
                                <p>
                                    <b>Oil painting</b>, technique in which
                                    pigments are mixed with hot, liquid wax.
                                    After all of the colours have been applied
                                    to the painting surface, a heating element
                                    is passed over them until the individual
                                    brush or spatula marks fuse into a uniform
                                    film.
                                </p>
                            </div>
                            <router-link to="/gallery-detail-right"
                                ><a class="type1 dt-sc-button small"
                                    >View Gallery<i
                                        class="fa fa-angle-right"
                                    ></i></a
                            ></router-link>
                        </div>
                    </article>
                </div>

                <div class="blog-section">
                    <article class="blog-entry type2">
                        <div class="entry-details">
                            <div class="entry-title">
                                <h3>
                                    <router-link to="/gallery"
                                        ><a>Money Paintings</a></router-link
                                    >
                                </h3>
                            </div>
                            <div class="entry-body">
                                <p>
                                    <b>Impasto painting</b>, technique in which
                                    pigments are mixed with hot, liquid wax.
                                    After all of the colours have been applied
                                    to the painting surface, a heating element
                                    is passed over them until the individual
                                    brush or spatula marks fuse into a uniform
                                    film.
                                </p>
                            </div>
                            <router-link to="/gallery"
                                ><a class="type1 dt-sc-button small"
                                    >View Gallery<i
                                        class="fa fa-angle-right"
                                    ></i></a
                            ></router-link>
                        </div>
                        <div class="entry-thumb">
                            <ul class="blog-slider">
                                <li>
                                    <video
                                        src="https://cdn.shopify.com/videos/c/vp/0ae9fb00893f468cb8e0b7e716ff83b8/0ae9fb00893f468cb8e0b7e716ff83b8.HD-1080p-7.2Mbps.mp4"
                                        autoplay
                                        muted
                                        loop
                                        controls
                                    ></video>
                                </li>

                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_100x100cm-Prints_Elastique_Epoxyoncanvas-Limited1_100-.B-artBartStillekensArt4_720x.jpg?v=1658328194" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_150x150cm4_540x.jpg?v=1609794973" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_150x150cm-Prints_Elastique_Epoxyon24mmwood-Limited1_5-B-artBartStillekensArtKunst_720x.png?v=1658327883" alt="" title=""> </li> -->
                                <!-- <li> <img src="https://cdn.shopify.com/s/files/1/0502/5536/4268/products/MoneyPainting_150x150cm2_720x.jpg?v=1658327883" alt="" title=""> </li> -->
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
            <!-- **Full-width-section Ends Here** -->
            <div class="clear"></div>

            <div class="dt-sc-hr-invisible-small"></div>
            <div class="clear"></div>

            <div class="fullwidth-section">
                <!-- **Full-width-section Starts Here** -->
                <div class="container">
                    <div
                        class="main-title animate"
                        data-animation="pullDown"
                        data-delay="100"
                    >
                        <h2 class="aligncenter">About Elephantus</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing
                            elit, sed do
                        </p>
                    </div>

                    <div class="about-section">
                        <div class="dt-sc-one-half column first">
                            <img
                                :src="'/images/about_bg.png'"
                                title=""
                                alt=""
                            />
                        </div>

                        <div class="dt-sc-one-half column">
                            <h3
                                class="animate"
                                data-animation="fadeInLeft"
                                data-delay="200"
                            >
                                A Little Intro
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut
                                enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo
                                consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum
                                dolore
                            </p>
                            <h3
                                class="animate"
                                data-animation="fadeInLeft"
                                data-delay="300"
                            >
                                My Exhibitions
                            </h3>
                            <p>
                                Sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, Lorem
                                ipsum dolor quis nostrud exercitation ullamco
                            </p>
                            <h3
                                class="animate"
                                data-animation="fadeInLeft"
                                data-delay="400"
                            >
                                Newsletter
                            </h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit,
                            </p>
                            <form
                                method="post"
                                class="mailchimp-form dt-sc-three-fourth"
                                name="frmnewsletter"
                                action="php/subscribe.php"
                            >
                                <p class="input-text">
                                    <input
                                        class="input-field"
                                        type="email"
                                        name="mc_email"
                                        value=""
                                        required
                                    />
                                    <label class="input-label">
                                        <i class="fa fa-envelope-o icon"></i>
                                        <span class="input-label-content"
                                            >Mail</span
                                        >
                                    </label>
                                    <input
                                        type="submit"
                                        name="submit"
                                        class="submit"
                                        value="Subscribe"
                                    />
                                </p>
                            </form>
                            <div id="ajax_subscribe_msg"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- **Full-width-section Ends Here** -->

            <div class="dt-sc-hr-invisible-small"></div>
        </section>
        <!-- **Primary Ends Here** -->
        <!-- footer component here -->
        <Footer></Footer>
    </div>
    <!-- Main Ends Here-->
</template>

<script>
import Sidebar from "./partials/Sidebar.vue";
import Footer from "./Footer.vue";
import api from "../services/api";
import GalleryComponent from "./HomePage/GalleryComponent.vue";
export default {
    components:{
        Sidebar,
        Footer,GalleryComponent
    },
    data(){

    },
    mounted(){

    },
    methods:{

    }
};
</script>
