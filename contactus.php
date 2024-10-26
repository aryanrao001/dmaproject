<!DOCTYPE html>
<html lang="en">
<head>

<?php include('include/css.php'); ?>

</head>
<body>

<div class="main">

    <div class="circlecontain" style="position: relative;">
        <div class="circle">
            <div class="point"></div>
        </div>
    </div>
<!--================= Header ===========-->
    
<?php include('include/header.php'); ?>

<!--================= Banner Sec =======-->
    <section style="display: none;">
        <div class="bannersec">
            <div class="bannerright">
                <button class="seobtn">Best Seo </button>
                <h1>Optimizing individual web pages to rank higher and more relevant traffic</h1>
                <p>SEO helps people gain valuable knowledge on how to invest and save their money wisely, while financial planners provide expert guidance to optimize their financial decisions.</p>
                <button  class="startbtn"><a href="">Get Started &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
            <div class="bannerleft ">
                <div  class="image-box" id="imageBox">
                  <img width="" src="assets/images/bannersidephoto.webp">
                </div>
            </div>
        </div>
    </section>

<!--=============== || =====================-->


    <section>
        <div class="innerbannersec">
            <div class="circlecontainer">
                <div class="blurrycircle"></div>
            </div>
            <div>
                <h1>Contact Us </h1>
                <h5>Home > Contact  Us </h5>
            </div>
        </div>
    </section>

<!--================= Content Start ===-->
<!--==========  Content 1 =====-->
    <section class="content1contact">
        <div>
            <div class="contactuscontent1">
                <div class="contactusline" >
                    <h1>Get In Touch </h1>
                    <p>Don’t hesitate to reach out! If you have any questions or would like to inquire about our services, feel free to contact us today!</p>
                </div>
            </div>
            <div class="contactuscontent2">
                <div class="formsec">
                    <form enctype="multipart/form-data@" method="post" action="mail2.php">
                        <div >
                            <input type="text" placeholder="Your Name" name="name" >
                            <input type="text" placeholder="Your Email"name="email" >
                        </div>
                        <div >
                            <input type="text" placeholder="Your Number" name="mobile" >
                            <input type="text" placeholder="Subject"     name="subject">
                        </div>
                        <div class="textareabox">
                            <textarea class="" name="comment" >Your Message </textarea>
                        </div>
                        <div>
                            <button class="startbtn" ><a href="">Submit Now </a></button>
                        </div>
                    </form>
                </div>
                <div class="outerinfoboxes">
                    <div class="infobox">
                        <div class="infoi"><i class="fa-solid fa-envelope"></i></div>
                        <div><h1>Email</h1><p>kumarrahul38994@gmail.com</p></div>
                    </div>
                    <div class="infobox">
                        <div class="infoi"><i class="fa-solid fa-phone"></i></div>
                        <div><h1>Phone</h1><p>+91 7500537068</p></div>
                    </div>
                    <div class="infobox">
                        <div class="infoi" ><i class="fa-solid fa-location-dot"></i></div>
                        <div><h1>Address</h1><p>69, 1st Floor, Near Bank Of Baroda, GTB Nagar, Delhi - 110009 (Near Metro Station Gate No.1)</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--=========== Content 2 =====-->
    <section class="content2" style="display:none;" >
        <div class="content2firdiv"> 
            <button class="servicebtn" >Services </button>
            <h1>Your All-in-One Partner <br>for Digital Transformation.</h1>
            <!-- <h1 >SEO Strategies for Visible<br> Success Achieve Higher  </h1> -->
        </div>
        <div id="cont3trigger" class="content2secdiv">
            <div class="serviceboxcontainer" >
                <div class="servicebox servicebox1" id="servicebox" > 
                    <div>
                        <img src="assets/images/cont2img1.webp">
                        <h1 class="lefth2">Responsive Website Design</h1>
                        <p>In today’s digital age, your website is often the first meaningful interaction potential customers have with your brand.</p>
                        <button class="startbtn"><a href="#">Get Started &nbsp;<i class="fa-solid fa-arrow-right-long"></i> </a></button>
                    </div>
                </div>
                <div class="servicebox servicebox2" > 
                    <div  >
                        <img src="assets/images/cont2img2.webp">
                        <h1 class="lefth3">Impactful Social Media Ads </h1>
                        <p>In a digital landscape dominated by social media, our Impactful Social Media Ads service is crafted to enhance your brand presence and boost engagement.</p>
                        <button class="startbtn"><a href="#">Get Started &nbsp;<i class="fa-solid fa-arrow-right-long"></i> </a></button>
                    </div>
                </div>
                <div class="servicebox servicebox3" > 
                    <div>
                        <img src="assets/images/cont2img3.webp">
                        <h1 class="lefth4">Expert SEO Services </h1>
                        <p>Our Results-Driven SEO Services are meticulously crafted to not only maximize your online visibility but also to effectively drive targeted traffic to your website,</p>
                        <button class="startbtn"><a href="#">Get Started &nbsp;<i class="fa-solid fa-arrow-right-long"></i> </a></button>
                    </div>
                </div>
                <div class="servicebox servicebox4" > 
                    <div>
                        <img src="assets/images/cont2img4.webp">
                        <h1 class="lefth5">Unique Graphic Creations  </h1>
                        <p>"In a visually-driven world, compelling graphic design is absolutely essential for effectively capturing your audience’s attention.</p>
                        <button class="startbtn"><a href="#">Get Started &nbsp;<i class="fa-solid fa-arrow-right-long"></i> </a></button>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--=========== Content 3 ======-->
    <section style="display:none;">
        <div class="cont3">
            <div class="cont3left">
                <div class="cont3box cont3effect">
                    <img src="assets/images/cont3img2.webp">
                    <div class="seobox">
                        <h1>Website Making</h1>
                        <h5>90%</h5>
                    </div>
                    <div class="rangeline"></div>
                </div>
                <div class="cont3box cont3effect">
                    <img src="assets/images/cont3img3.webp">
                    <div class="seobox">
                        <h1>SEO Consulting</h1>
                        <h5>90%</h5>
                    </div>
                    <div class="rangeline rangeline2"></div>
                </div>
            </div>
            <div  class="mobileimage ">
                <img class="cont3img"  src="assets/images/cont3img1.webp">
            </div>
            <div class="cont3right">
                <div class="cont3box cont3effect">
                    <img src="assets/images/cont3img4.webp">
                    <div class="seobox">
                        <h1>Graphic Designing</h1>
                        <h5>90%</h5>
                    </div>
                    <div class="rangeline rangeline3"></div>
                </div>
                <div class="cont3box cont3effect">
                    <img src="assets/images/cont3img5.webp">
                    <div class="seobox">
                        <h1>Logo Making</h1>
                        <h5>90%</h5>
                    </div>
                    <div class="rangeline rangeline4"></div>
                </div>
            </div>
        </div>
    </section>

<!--========== Content 4 =======-->
    <section class="content4" style="display:none;" >
        <div class="content4firdiv"> 
            <button class="servicebtn"  >Recent Blog  </button>
            <h1>
                Transforming Clicks into<br> Customers Rankings </h1>
        </div>
        <div class="content4secdiv">
            <div class="pricesidediv">
                <div class="pricesec">
                    <h1>Basic</h1>
                    <h1><span>$29</span>/m</h1>
                </div>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp; Mistakes To Avoid</li>
                    <li><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp; Your Startup    </li>
                    <li><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp; Knew About Fonts</li>
                    <li><i class="fa-solid fa-circle-check"></i>&nbsp;&nbsp; Knew About Fonts</li>
                </ul>
                <button class="getnow"><a href="#">Get Now &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
            <div class="pricesidediv pricesidediv2">
                <div class="pricesec pricesec2">
                    <h1>Basic</h1>
                    <h1><span>$29</span>/m</h1>
                </div>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Mistakes To Avoid</li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Your Startup    </li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Knew About Fonts</li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Knew About Fonts</li>
                </ul>
                <button class="getnow2"><a href="#">Get Now &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
            <div class="pricesidediv">
                <div class="pricesec">
                    <h1>Basic</h1>
                    <h1><span>$29</span>/m</h1>
                </div>
                <ul>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Mistakes To Avoid</li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Your Startup    </li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Knew About Fonts</li>
                    <li><i class="fa-solid fa-circle-check"></i> &nbsp;&nbsp;Knew About Fonts</li>
                </ul>
                <button class="getnow"><a href="#">Get Now &nbsp; &nbsp; <i class="fa-solid fa-arrow-right"></i></a></button>
            </div>
        </div>
    </section>

<!--========== Content 5 =======-->
    <section class="content5 content" style="margin:0 0 8vw 0 ; display:none;">
        <button class="servicebtn" >FAQ</button>
        <h1>Achieve Higher Rankings<br> with Us That Work  </h1>
        <div class="cont5cirlce"></div>
        <div class="cont5contain">
            <div class="accordionsec" >
                <ul class="accordion-list">
                    <li>
                      <h3>How does SEO help with finances ?</h3>
                      <div class="answer">
                        <!-- <p>Seo help people to gain knowledge aboutw toio invest and save their money in the most Financia</p> -->
                        <p>SEO provides valuable insights and resources for money management and investment strategies, improving financial literacy.</p>
                          
                      </div>
                    </li>
                    <li>
                      <h3> What are the benefits of Social Media Ads?</h3>
                      <div class="answer">
                        <!-- <p>Seo help people to gain knowledge aboutw toio invest and save their money in the most Financia</p> -->
                        <p>Social Media Ads effectively reach specific audiences, increasing brand awareness and engagement.</p>
                      </div>
                    </li>
                    <li>
                      <h3>Why is Website Making essential?</h3>
                      <div class="answer">
                        <!-- <p>Seo help people to gain knowledge aboutw toio invest and save their money in the most Financia</p> -->
                        <p>A professional website builds credibility, improves user experience, and generates leads.</p>
                      </div>
                    </li>
                    <li>
                      <h3>How does Graphic Designing affect a brand? </h3>
                      <div class="answer">
                        <p>Graphic Designing enhances brand identity and engages audiences with visually appealing content.</p>
                        
                      </div>
                    </li>
                </ul>
            </div>
            <div class="cont5boxcontainer" >
                <div class="cont5allbox" >
                    <div class="cont5box" >
                        <h1>4000 +</h1>
                        <p>Team member</p>
                    </div>
                    <div class="cont5box" >
                        <h1>40 +</h1>
                        <p>Winning award</p>
                    </div>
                </div>
                <div class="cont5allbox">
                    <div class="cont5box" >
                        <h1>80k +</h1>
                        <p>Client review</p>
                    </div>
                    <div class="cont5box" >
                        <h1>105 +</h1>
                        <p>Complete project</p>
                    </div>    
                </div>
            </div>
        </div>
            
    </section>

<!--========== Content 6 =======-->
    <section class="content6 content" style="display:none;">
        <button class="servicebtn">Recent Blogs </button>
        <div class="cont6top">
            <h1>Unlocking the Power <br> of Search </h1>
            <button class="startbtn" ><a href="#">Get Started &nbsp;<i class="fa-solid fa-arrow-right-long"></i></a></button>
        </div>
        <div class="cont6blogcontainer" >
            <div class="cont6blogsec">
                <div class="blogimgcontainer"><img src="assets/images/blog1.webp"></div>
                <button class="servicebtn" >October 19,2024</button>
                <h1>Custom Software Custom</h1>
                <p>Seo help people to gain knowledge about toio invest ns save their money in the most Financia</p>
                <a>Read More <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="cont6blogsec">
                <div class="blogimgcontainer"><img src="assets/images/blog2.webp"></div>
                <button class="servicebtn" >October 19,2024</button>
                <h1>keywords that potential </h1>
                <p>Seo help people to gain knowledge about toio invest ns save their money in the most Financia</p>
                <a>Read More <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
            <div class="cont6blogsec">
                <div class="blogimgcontainer"><img src="assets/images/blog3.webp"></div>
                <button class="servicebtn" >October 19,2024</button>
                <h1>Optimizing meta titles </h1>
                <p>Seo help people to gain knowledge about toio invest ns save their money in the most Financia</p>
                <a>Read More <i class="fa-solid fa-arrow-right-long"></i></a>
            </div>
        </div>

    </section>
    
<!--========== Footer =======-->

<?php include('include/footer.php'); ?>

</div>    

<!--==== Script ===-->


<!-- jQuery CDN -->

<?php include('include/script.php'); ?>

</body>
</html>