<template>
    <div id="header-wrapper" class="dt-sticky-menu"> <!-- **header-wrapper Starts** -->
            <header id="sidebar-slider" class="slide-bar">
                <div class="header-container">
                    <div class="header-inner">
                        <a href="#" class="close-btn">
                            <span class="close"></span>
                        </a>
                        <a class="logo-container"><router-link to="/">
                            <img src="images/logo.png" alt="" ></router-link>
                        </a>
                        <nav>
                            <ul class="menu type3">
                                <li class="menu-item-simple-parent"><router-link to="/"><a>Home Page</a></router-link>
                                </li>
                                <router-link to="/about"><li class="menu-item-simple-parent"><a title="About" >About Us</a></li></router-link>
                                <li class="menu-item-simple-parent">
                                    <router-link to="/gallery"><a>Gallery Page <span class="arrow"></span></a></router-link>
                                    <ul class="sub-menu">
                                        <router-link to="/gallery"><li><a>Gallery</a></li></router-link>
                                        <router-link to="/gallery-detail"><li><a>Gallery detail</a></li></router-link>
                                        <router-link to="/gallery-detail-left"><li><a>Gallery-detail-left-sidebar</a></li></router-link>
                                        <router-link to="/gallery-detail-right"><li><a>Gallery-detail-right-sidebar</a></li></router-link>
                                    </ul>
                                </li>
                                <router-link to="/contact"><li class="menu-item-simple-parent"><a title="Contact">Contact</a></li></router-link>                                              
                            </ul>
                        </nav>
                        <div class="social-icons">
                            <a class="fa fa-facebook" href="#"></a>
                            <a class="fa fa-twitter" href="#"></a>
                            <a class="fa fa-instagram" href="#"></a>
                        </div>
                        <p class="copyrights">COPYRIGHT &copy; <a>ELEPHANTUS ART GALLERY</a></p>                        
                    </div>
                </div>
            </header>
            
            <div class="header-bar active" style="display:block">
                <a class="menu-nav">
                    <span></span>
                </a>
                <router-link to="/"><a class="logo-mini">
                	<img src="images/logo-mini.png" alt="">
                    <span><i style="color: black;"><b>E L E P H A N T U S</b></i>   </span>
                </a></router-link>
                <router-link to="/"><a class="logo-mobile">
                	<!-- <img alt="" src="images/logo-mini.png"> -->
                    <p><span style="color: black;"><b>ELEPHANTUS</b></span>  </p>
                </a></router-link>
				<div class="share-mini">
                    <a class="show fa fa-share-alt" href="#"></a>
                    <div class="icons" style="display: none;">
                        <a class="fa fa-facebook" href="#"></a>
                        <a class="fa fa-twitter" href="#"></a>
                        <a class="fa fa-instagram" href="#"></a>
                    </div>
                </div>                
            </div>
        </div>
</template>