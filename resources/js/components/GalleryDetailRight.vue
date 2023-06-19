<template>
      <div id="main">
        	<div class="breadcrumb"><!-- *BreadCrumb Starts here** -->
                <div class="container"><!-- **Container Starts Here** -->
                    <h2>Gallery Detail With <span>Right Sidebar</span></h2>
                    <div class="user-summary">
                    	<div class="account-links">
                        	<a href="#">My Account</a>
                            <a href="#">Checkout</a>
                        </div>
                        <div class="cart-count">
                        	<a href="#">Shopping Bag: 0 items</a> 
                            <a href="#">($0.00)</a>
                        </div>
                    </div>
                </div>
        	</div><!-- *BreadCrumb Ends here** -->
            <div class="container">
                <div class="main-title animate" data-animation="pullDown" data-delay="100">
                    <h3> Gallery Detail </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
                </div>
                <section id="primary" class="with-sidebar with-right-sidebar">
                	<article>
                    	<div class="dt-sc-one-column column first">
                        	<div class="recent-gallery-container">
                                <ul class="recent-gallery">
                                    <li> <img src="http://via.placeholder.com/1920x800&text=Service+Carousel+1" alt="image"/> </li>
                                    <li> <img src="http://via.placeholder.com/1920x800&text=Service+Carousel+2" alt="image"/> </li>
                                    <li> <img src="http://via.placeholder.com/1920x800&text=Service+Carousel+3" alt="image"/> </li>
                                    <li> <img src="http://via.placeholder.com/1920x800&text=Service+Carousel+4" alt="image"/> </li>
                                </ul>
                                <div id="bx-pager">
                                    <a href="#" data-slide-index='0'><img src='http://via.placeholder.com/1920x800&text=Service+Thumb+1/000000' alt='image' /></a>
                                    <a href="#" data-slide-index='1'><img src='http://via.placeholder.com/1920x800&text=Service+Thumb+2/000000' alt='image' /></a>
                                    <a href="#" data-slide-index='2'><img src='http://via.placeholder.com/1920x800&text=Service+Thumb+3/000000' alt='image' /></a>
                                    <a href="#" data-slide-index='3'><img src='http://via.placeholder.com/1920x800&text=Service+Thumb+4/000000' alt='image' /></a>
                                </div>                            	
                            </div>
                        </div>
						<div class="dt-sc-hr-invisible-small"> </div>
                        <div class="dt-sc-two-third column first animate" data-animation="fadeInLeft" data-delay="100">
                        	<h3>Live Free, Ride Hard</h3>
                            <p> Red art sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda. </p>
                            <p> Contrary to popular belief, Lorem Ipsum is not simply random text. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda.  Curabitur vulputate massa lorem. </p>
                            <p> Morbi vitae rhoncus erat. Duis nec leo massa.  Duis aute irure dolor in &nbsp;eprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Ullum scripserit ut mea, eum ut recteque sententiae sadipscing, volumus ex vix. </p>
							<p> Red Art to a famous belief, Lorem Ipsum is not simply random text. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda.  Curabitur vulputate massa lorem. </p>                            							
                        </div>
                        <div class="dt-sc-one-third column animate" data-animation="fadeInRight" data-delay="100">
                            <div class="dt-sc-project-details">
                        		<h5>Other Details</h5>                            
                                <div class="enquiry-details">
                                    <p> <i class="fa fa-cab"></i> 121 King St, Melbourne VIC 3, Australia </p>
									<p><i class="fa fa-mortar-board"></i> Stephen Jones</p>
									<p><i class="fa fa-wrench"></i> Crayons, Sketch, Scissors</p>
                                    <p> <i class="fa fa-tags"></i> Arcrylic, Sculpture, Canvas</p>                                                                                                            
                                    <p> <i class="fa fa-globe"></i> <a href="#"> envato.com </a> </p>
                                </div>
                        		<h5>Social Sharing</h5>                                 
                                <ul class="type3 dt-sc-social-icons">
                                    <li class="twitter"><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                    <li class="facebook"><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                    <li class="google"><a href="#"> <i class="fa fa-google"></i> </a></li>
                                    <li class="dribbble"><a href="#"> <i class="fa fa-dribbble"></i> </a></li>
                                </ul>                                
                            </div>
                        </div>
                        <div class="dt-sc-post-pagination">
                            <a class="dt-sc-button small type3 with-icon prev-post" href="#"> <span> Previous Post </span> <i class="fa fa-hand-o-left"> </i> </a> 
                            <a class="dt-sc-button small type3 with-icon next-post" href="#"><i class="fa fa-hand-o-right"> </i>  <span> Next Post </span> </a>
                        </div>                        
                    </article>
					<div class="dt-sc-hr-invisible-small"></div>                    
                </section>
                <section id="secondary" class="secondary-sidebar secondary-has-right-sidebar"><!-- **Secondary Starts Here** -->
                    <aside class="widget widget_search">
                        <div class="widgettitle sub-title">
                            <h3>Have you Lost ?</h3>
                        </div>
                        <form method="post" id="searchform" action="#">	
                            <p class="input-text">
                               <input class="input-field" type="email" name="mc_email" value="" required/>
                               <label class="input-label">
                                        <i class="fa fa-search icon"></i>
                                        <span class="input-label-content">Hunt</span>
                                    </label>
                               <input type="submit" name="submit" class="submit" value="Submit" />
                            </p>
                        </form>
                        <div id="ajax_subscribe_msg"></div>                        
                    </aside>
                    <aside class="widget widget_categories">
                       <div class="widgettitle sub-title">
                            <h3> Categories </h3>
                        </div>
                        <ul>
                            <li class="cat-item"><a title="#" href="#">Corporate<span> 2</span></a></li>
                            <li class="cat-item"><a title="#" href="#">Design<span> 3</span></a></li>
                            <li class="cat-item"><a title="#" href="#">Learning<span> 2</span></a></li>
                            <li class="cat-item"><a title="#" href="#">Tools<span> 1</span></a></li>
                            <li class="cat-item"><a title="#" href="#">Training<span> 3</span></a></li>
                        </ul>
                    </aside>
                    <aside class="widget widget_popular_entries">
                        <div class="widgettitle sub-title">
                            <h3> Latest Gallery</h3>
                        </div>
                        <div class="recent-gallery-widget">
                            <ul>
                                <li>
                                    <a class="entry-thumb" href="#"><img alt="Enjoy Life with Family" src="http://via.placeholder.com/955x470&text=Portfolio+Image"></a>
                                    <h5><a href="#"> Cowboy of Timberland </a></h5>
                                    <p>Vivamus ullamcorper, enim at varius molestie, nunc libero pulvinar sapien, quis fringilla purus mi vitae tellus.</p>
                                </li>
                            </ul>
                        </div>
                    </aside>
                    <aside class="widget widget_tag_cloud">
                        <div class="widgettitle sub-title">
                            <h3> Tags </h3>
                        </div>
                        <div class="tagcloud type3">
                            <a title="1 topic" href="#">Sketch</a>
                            <a title="1 topic" href="#">Oil color</a>
                            <a title="1 topic" href="#">Acrylic</a>
                            <a title="1 topic" href="#">Sculpture</a>
                            <a title="1 topic" href="#">Crayons</a>
                            <a title="1 topic" href="#">Art</a>                                                        
                        </div>
                    </aside>                                                                           	
                </section><!-- **Secondary Ends Here** -->            
            </div><!-- **Container Ends Here** -->
			<div class="dt-sc-hr-invisible-small"></div>            
            <div class="container">
                <div class="main-title animate" data-animation="pullDown" data-delay="100">
                    <h3> Related Art </h3>
                </div>
            </div>
            <div class="portfolio-fullwidth"><!-- **portfolio-fullwidth Starts Here** -->
                <div class="portfolio-grid">
                    <div class="dt-sc-portfolio-container isotope"> <!-- **dt-sc-portfolio-container Starts Here** -->
                        <div class="portfolio nature still-life dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/1500x2000&text=Portfolio+Image7" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/1500x2000&text=Portfolio+Image7"></a><span>5</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail.html">Stay single</a></h5>
                                            <p>Make Way</p>
                                        </div>
                                    </div>
                                </figcaption>                                        
                           </figure>
                        </div>
                        <div class="portfolio people still-life dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/650x450&text=Portfolio+Image9" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/650x450&text=Portfolio+Image9"></a><span>15</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail-with-rhs.html">Stand Tall</a></h5>
                                            <p>Hard to Settle!!</p>
                                        </div>
                                    </div>
                                </figcaption>                                        
                           </figure>
                        </div>
                        <div class="portfolio people still-life dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/500x800&text=Portfolio+Image1" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/500x800&text=Portfolio+Image1"></a><span>3</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail.html">Proposing Love</a></h5>
                                            <p>Sample text here looks good</p>
                                        </div>
                                    </div>
                                </figcaption>
                           </figure>
                        </div>
                        <div class="portfolio people nature still-life street dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/345x215&text=Portfolio+Image12" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/345x215&text=Portfolio+Image12"></a><span>12</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail-with-lhs.html">Born to Ride</a></h5>
                                            <p>Cowboys are born, ain't made!</p>
                                        </div>
                                    </div>
                                </figcaption>                                        
                           </figure>
                        </div>
                        <div class="portfolio nature people street still-life dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/1600x1100&text=Portfolio+Image8" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/1600x1100&text=Portfolio+Image8"></a><span>12</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail-with-lhs.html">Born to Ride</a></h5>
                                            <p>Cowboys are born, ain't made!</p>
                                        </div>
                                    </div>
                                </figcaption>                                        
                           </figure>
                        </div>
                        <div class="portfolio street nature people still-life dt-sc-one-fourth">
                            <figure>
                                <img src="http://via.placeholder.com/300x211&text=Portfolio+Image10" alt="" title="">
                                <figcaption>
                                    <div class="portfolio-detail">
                                        <div class="views">
                                            <a class="fa fa-camera-retro" data-gal="prettyPhoto[gallery]" href="http://via.placeholder.com/300x211&text=Portfolio+Image10"></a><span>5</span>
                                        </div>
                                        <div class="portfolio-title">
                                            <h5><a href="gallery-detail.html">Stay single</a></h5>
                                            <p>Make Way</p>
                                        </div>
                                    </div>
                                </figcaption>                                        
                           </figure>
                        </div>
                    </div><!-- **dt-sc-portfolio-container Ends Here** -->
                </div>
            </div><!-- **portfolio-fullwidth Ends Here** -->
            
            <footer id="footer" class="animate" data-animation="fadeIn" data-delay="100">
                <div class="container">
                    <div class="copyright">
                        <ul class="footer-links">
                            <li><a href="#">Contact us</a></li>
                            <li><a href="#">Privacy policy</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Faq</a></li>                    
                        </ul>
                        <ul class="payment-options">
                            <li><a href="#" class="fa fa-cc-amex"></a></li>
                            <li><a href="#" class="fa fa-cc-mastercard"></a></li>
                            <li><a href="#" class="fa fa-cc-visa"></a></li>
                            <li><a href="#" class="fa fa-cc-discover"></a></li>
                            <li><a href="#" class="fa fa-cc-paypal"></a></li>
                        </ul>
                        <p>© 2015 <a href="#">RED ART</a>. All rights reserved.</p>
                    </div>
                </div>
            </footer>
        </div><!-- Main Ends Here-->
</template>