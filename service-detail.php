<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("includes/compatibility.php"); ?>
   <meta name="description" content="">
   <title>Brand</title>
   <?php include("includes/style.php"); ?>
</head>

<body>
   <!-- Popup Form -->
   <div id="popupForm" class="popup">
      <div class="popup-content">
         <span class="close" onclick="closePopup()">&times;</span>
         <h2>Basic Web Package</h2>
         <p>Price: £225</p>
         <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="phonenumber">Phone Number:</label>
            <input type="text" id="phonenumber" name="phonenumber" required><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br>
            <button type="submit">Submit</button>
         </form>
      </div>
   </div>
   <?php include("includes/pre-loader.php"); ?>
   <?php include("includes/header.php"); ?>

   <section class="mainBanner">
      <div class="shape3">
         <img src="assets/images/bannerlogo.png" alt="">
      </div>
      <div class="container">
         <h1 class="gs_reveal gs_reveal_fromDown">Website <span>Design</span> & Development</h1>
         <a href="javascript:;" class="btnn-postion-hover mn-btn gs_reveal gs_reveal_fromDown" data-modal="#login-modal">start a project <span></span></a>
         <div class="main-menu gs_reveal gs_reveal_fromDown">
            <?php include("includes/navigation.php"); ?>
         </div>
      </div>
   </section>

   <section class="service-detail">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h4 class="gs_reveal gs_reveal_fromLeft">STAND OUT IN TODAY'S <span>COMPETITIVES</span> DIGITAL LANDSCAPE</h4>
               <p class="gs_reveal gs_reveal_fromLeft">We design and develop websites that grab attention and convert visitors into loyal customers. Our team crafts beautiful, user-friendly experiences that showcase your brand and drive results. Let us help you dominate the digital space.</p>
               <p class="gs_reveal gs_reveal_fromLeft">Teknocide doesn't just build websites, we build partnerships. We work closely with you to understand your brand and target audience. This allows us to create a website that is not only visually stunning but also strategically designed to achieve your specific goals. From boosting brand awareness to generating leads, we'll ensure your website works hard for you.</p>
            </div>
            <div class="col-md-6">
               <div class="abtwrapimg  gs_reveal gs_reveal_fromDown">
                  <img src="assets/images/sdetail.png" alt="">
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="aboutsec servicedetailsec">
      <div class="container">
         <div class="row align-items-center">

            <div class="col-md-6">
               <div class="abtwrapimg  gs_reveal gs_reveal_fromDown">
                  <img src="assets/images/sd1.png" alt="">
               </div>
            </div>
            <div class="col-md-6">
               <h4 class="gs_reveal gs_reveal_fromLeft">MORE THAN <span>JUST</span> A WEBSITE</h4>
               <p class="gs_reveal gs_reveal_fromLeft">At Teknocide, we craft exceptional websites tailored to your business needs. Our expert team ensures your online presence is dynamic, engaging, and optimized for success. Experience innovative design and seamless functionality with us.</p>
            </div>

         </div>

      </div>
   </section>

   <section class="packages">
      <div class="container">
         <div class="row">
            <div class="col-md-12 text-center">
               <h3>Packages </h3>
            </div>
         </div>
         <div class="row">
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;" onclick="openPopup()">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-4">
               <div class="box gs_reveal gs_reveal_fromDown">
                  <div class="package-head">
                     <h4>Basic <span>Web</span> Package</h4>
                     <label>£225</label>
                     <a href="javascript:;">Buy Now</a>
                  </div>
                  <div class="package-body">
                     <h5>FEATURES</h5>
                     <ul>
                        <li>3 Page Website</li>
                        <li>3 Banner Design</li>
                        <li>1 jQuery Slider Banner</li>
                        <li>FREE Google Friendly Sitemap</li>
                        <li>Complete W3C Certified HTML</li>
                        <li>48 to 72 hours TAT</li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <section class="ourworksec">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <h4 class="gs_reveal gs_reveal_fromLeft">our work</h4>
            </div>
            <div class="col-md-6">
               <p class="gs_reveal gs_reveal_fromLeft">At Teknocide, we pride ourselves on delivering outstanding results. Our portfolio showcases innovative designs, strategic marketing campaigns, and impactful animations that drive success and elevate brands.</p>
            </div>
         </div>
         <div class="workimgs">
            <div class="row">
               <div class="col-md-4">
                  <a href="assets/images/work/1.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/1.png" alt=""></a>
               </div>
               <div class="col-md-4">
                  <a href="assets/images/work/2.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/2.png" alt=""></a>
               </div>
               <div class="col-md-4">
                  <a href="assets/images/work/3.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/3.png" alt=""></a>
               </div>
               <div class="col-md-4">
                  <a href="assets/images/work/4.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/4.png" alt=""></a>
               </div>
               <div class="col-md-4">
                  <a href="assets/images/work/5.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/5.png" alt=""></a>
               </div>
               <div class="col-md-4">
                  <a href="assets/images/work/6.png" class="gs_reveal gs_reveal_fromDown" data-fancybox="images"><img src="assets/images/work/6.png" alt=""></a>
               </div>
            </div>
         </div>
      </div>
   </section>


   <section class="awardsec">
      <div class="container">
         <h4 class="gs_reveal gs_reveal_fromDown">Some Number of <span>Achievements</span></h4>
         <p class="gs_reveal gs_reveal_fromDown">Some good number of achievements from through out our journey.</p>
         <div class="row">
            <div class="col-md-3">
               <div class="countbox gs_reveal gs_reveal_fromDown">
                  <span class="count">7</span>
                  <h6>Year Of Experience</h6>
               </div>
            </div>
            <div class="col-md-3">
               <div class="countbox gs_reveal gs_reveal_fromDown">
                  <span class="count">570</span>
                  <h6>Project Complete</h6>
               </div>
            </div>
            <div class="col-md-3">
               <div class="countbox gs_reveal gs_reveal_fromDown">
                  <span class="count">145</span>
                  <h6>Happy Clients</h6>
               </div>
            </div>
            <div class="col-md-3">
               <div class="countbox gs_reveal gs_reveal_fromDown">
                  <span class="count">145</span>
                  <h6>Awards Winner</h6>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="formsec">
      <div class="formlogo">
         <img src="assets/images/formlogo.png" alt="">
      </div>
      <div class="container">
         <form action="#">
            <div class="row">
               <div class="col-md-6">
                  <div class="field gs_reveal gs_reveal_fromDown">
                     <input type="text" placeholder="First Name">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="field gs_reveal gs_reveal_fromDown">
                     <input type="text" placeholder="Company Name">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="field gs_reveal gs_reveal_fromDown">
                     <input type="email" placeholder="Email Address">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="field gs_reveal gs_reveal_fromDown">
                     <input type="tel" placeholder="Phone Number">
                  </div>
               </div>
               <div class="col-md-12">
                  <div class="field fieldtextarea gs_reveal gs_reveal_fromDown">
                     <textarea placeholder="Message"></textarea>
                  </div>
                  <button class="gs_reveal gs_reveal_fromDown" type="submit">Submit Now</button>
               </div>
            </div>
         </form>
      </div>
   </section>

   <?php include("includes/footer.php"); ?>
   <?php include("includes/scripts.php"); ?>
   <script>
      $('ul.menu li').removeClass("active");
      $('.menu li:nth-child(3)').addClass("active");
      // Pre Loader
      const tl = gsap.timeline();
      tl.to("body", {
            overflow: "hidden"
         })
         .to(".preloader .text-container", {
            duration: 0,
            opacity: 1,
            ease: "Power3.easeOut"
         })
         .from(".preloader .text-container h1", {
            duration: 1.5,
            delay: 1,
            y: 70,
            skewY: 10,
            stagger: 0.4,
            ease: "Power3.easeOut"
         })
         .to(".preloader .text-container h1", {
            duration: 1.2,
            y: 70,
            skewY: -20,
            stagger: 0.2,
            ease: "Power3.easeOut"
         })
         .to(".preloader", {
            duration: 1.5,
            height: "0vh",
            ease: "Power3.easeOut"
         })
         .to(
            "body", {
               overflow: "auto"
            },
            "-=2"
         )
         .to(".preloader", {
            display: "none"
         });
   </script>

   <script>
      function openPopup() {
         document.getElementById("popupForm").style.display = "block";
      }

      function closePopup() {
         document.getElementById("popupForm").style.display = "none";
      }
   </script>

</body>

</html>