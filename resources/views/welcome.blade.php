@section('title')
    Welcome
@endsection

@extends('layouts.app')

@section('content')

</head>
<style>
    /* Custom CSS for equal height columns and button alignment */
    #fh5co-features .row {
        display: flex;
        flex-wrap: wrap;
    }
    #fh5co-features .col-md-4 {
        display: flex;
        flex-direction: column;
        padding-bottom: 50px;
    }
    #fh5co-features .feature-left {
        display: flex;
        flex-direction: column;
        justify-content: center; /* Center vertically */
        height: 100%;
    }
    #fh5co-features .feature-left .icon {
        margin-right: 10px; /* Adjust icon spacing */
    }
    #fh5co-features .feature-copy {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    #fh5co-features .feature-copy h2,
    #fh5co-features .feature-copy p {
        margin-bottom: 15px;
    }
    #fh5co-features .feature-copy .btn {
        margin-top: auto; /* Pushes the button to the bottom */
    }
</style>
    <body class="antialiased">
           <div id="fh5co-wrapper">
                <div id="fh5co-page">
        
                <div class="fh5co-hero">
                    <div class="fh5co-overlay"></div>
                    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/welcomebg.jpg);">
                        <div class="desc animate-box">
                            <h2><strong>Donate</strong> to give meals to <strong> Those In Need</strong></h2>
                            {{-- <span>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></span> --}}
                            <span><a class="btn btn-primary btn-lg" href="/donationFee">Donate Now</a></span>
                        </div>
                    </div>
        
                </div>
                <!-- end:header-top -->
                <div class="container" id="fh5co-features">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="icon-profile-male"></i>
                                </span>
                                <div class="feature-copy">
                                    <h2>Become a Volunteer</h2>
                                    <p>Join us in supporting our mission to nourish seniors in need. Your commitment makes a lasting impact.</p>
                                    <a href="/register" class="btn btn-primary">Sign Up Now</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="icon-hand"></i>
                                </span>
                                <div class="feature-copy">
                                    <h2>Partnership Opportunities</h2>
                                    <p>Partner with us to make a difference in the lives of seniors. Together, we can provide essential support and care.</p>
                                    <a href="#" class="btn btn-primary">Partner With Us</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="feature-left">
                                <span class="icon">
                                    <i class="icon-wallet"></i>
                                </span>
                                <div class="feature-copy">
                                    <h2>Donation</h2>
                                    <p>Support our cause with your generosity. Every donation helps us make a difference.</p>
                                    <a href="/donationFee" class="btn btn-primary">Donate</a>
                                </div>
                            </div>
                        </div>
                    </div>



        
                <div id="fh5co-feature-product" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 text-center heading-section">
                                <h3>Giving is Virtue.</h3>
                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                            </div>
                        </div>
        
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/Home-Page-Learn-More-Tile.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/bernie-almanzar-3G96E38VFEA-unsplash.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/grab-qG6r2KPT4l4-unsplash.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                            <div class="col-md-6 text-center animate-box">
                                <p><img src="images/cater-yang-4SAzs4iYn8I-unsplash.jpg" alt="Free HTML5 Bootstrap Template" class="img-responsive"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Love</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Compassion</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="feature-text">
                                    <h3>Charity</h3>
                                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                </div>
                            </div>
                        </div>
        
                        
                    </div>
                </div>
        
                
                <div id="fh5co-portfolio">
                    <div class="container">
        
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3 text-center heading-section animate-box">
                                <h3>Our Gallery</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                            </div>
                        </div>
        
                        
                        <div class="row row-bottom-padded-md">
                            <div class="col-md-12">
                                <ul id="fh5co-portfolio-list">
        
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/austin-kehmeier-lyiKExA4zQA-unsplash.jpg); ">
                                        <a href="#" class="color-3">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                
                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_3.jpg); ">
                                        <a href="#" class="color-4">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
        
                                    <li class="one-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/li-lin-UOBK7OZMeMk-unsplash.jpg); "> 
                                        <a href="#" class="color-5">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="two-third animate-box" data-animate-effect="fadeIn" style="background-image: url(images/cover_bg_2.jpg); ">
                                        <a href="#" class="color-6">
                                            <div class="case-studies-summary">
                                                <span>Give Love</span>
                                                <h2>Donation is caring</h2>
                                            </div>
                                        </a>
                                    </li>
                                </ul>		
                            </div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                                <a href="#" class="btn btn-primary btn-lg">See Gallery</a>
                            </div>
                        </div>
        
                        
                    </div>
                </div>
                
        
                
                <div id="fh5co-content-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box" >
                                <h3>Our Volunteers</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/michael-dam-mEZ3PoFGs_k-unsplash.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                                    </blockquote>
                                    <span>Jean Doe, XYZ Co.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/client.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                                    </blockquote>
                                    <span>John Doe, XYZ Co.</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="fh5co-testimonial text-center animate-box">
                                    <figure>
                                        <img src="images/claudio-schwarz-4H9xt2DNgNc-unsplash.jpg" alt="user">
                                    </figure>
                                    <blockquote>
                                        <p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
                                    </blockquote>
                                    <span>John Doe, XYZ Co.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- fh5co-content-section -->
        
               
        
                <!-- END What we do -->
        
        
                <div id="fh5co-blog-section" class="fh5co-section-gray">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                                <h3>Recent From Blog</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row row-bottom-padded-md">
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/redcharlie-t-7KEq9M0b0-unsplash.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Meals on Wheels Mission in Location A</a></h3>
                                            <span class="posted_by">Sep. 15th</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p><a href="#">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/venti-views-tQGi3b7d6rU-unsplash.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Meals on Wheels Mission in Location B</a></h3>
                                            <span class="posted_by">Sep. 15th</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p><a href="#">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix visible-sm-block"></div>
                            <div class="col-lg-4 col-md-4 col-sm-6">
                                <div class="fh5co-blog animate-box">
                                    <a href="#"><img class="img-responsive" src="images/cover_bg_3.jpg" alt=""></a>
                                    <div class="blog-text">
                                        <div class="prod-title">
                                            <h3><a href=""#>Meals on Wheels Mission in Location C</a></h3>
                                            <span class="posted_by">Sep. 15th</span>
                                            <span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span>
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                                            <p><a href="#">Learn More...</a></p>
                                        </div>
                                    </div> 
                                </div>
                            </div>
                            <div class="clearfix visible-md-block"></div>
                        </div>
        
                        <div class="row">
                            <div class="col-md-4 col-md-offset-4 text-center animate-box">
                                <a href="#" class="btn btn-primary btn-lg">Our Blog</a>
                            </div>
                        </div>
        
                    </div>
                </div>
                <!-- fh5co-blog-section -->
            </div>
        </div>
          
        
    </body>
@endsection
