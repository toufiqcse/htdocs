<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akota Omnifood Project <?php  $title ?> </title>
    <link rel="stylesheet" href="../akota_shop/assests/css/style.css">
    <link rel="stylesheet" href="../akota_shop/assests/css/my-style.css">
</head>
<body>
    <!-----------------------------------------------------------
                            hero-section-start
    ------------------------------------------------------------>
    <?php
    $title = 'Home';
   
    include('header.php');
    ?>
    <main>
      <section class="section-hero">
        <div class="hero">
          <div class="hero-text-box">
            <h1 class="heading-primary">A healthy meal delivered to your door, in every single day</h1>
            <p class="hero-description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste qui quasi tenetur,explicabo!</p>
            <a href="#" class="btn btn-full">5 Star eating well</a>
            <a href="#" class="btn btn-outline">Learn more &darr;</a>
            <div class="delivered-meals">
              <div class="delivered-imgs">
                <img src="assests/images/delevered-img/d- (1).jpg" alt="customer-image" />
                <img src="assests/images/delevered-img/d- (2).jpg" alt="customer-image" />
                <img src="assests/images/delevered-img/d- (3).jpg" alt="customer-image" />
                <img src="assests/images/delevered-img/d- (4).jpg" alt="customer-image" />
                <img src="assests/images/delevered-img/d- (5).jpg" alt="customer-image" />
              </div>
              <p class="delevered-text"><span>250,000+</span> meals delivered last year.</p>
            </div>
          </div>
          <div class="hero-img-box">
            <img class="hero-img" src="assests/images/omnifood-hero.png" alt="" />
          </div>
        </div>
      </section>
      <!-----------------------------------------------------------
                            hero-section-end
      ----------------------------------------------------------->

      <!-----------------------------------------------------------
                            features-logo-section-start
      ----------------------------------------------------------->
      <section class="features-section">
        <div class="container-grid">
          <h2 class="feature-heading">As featured in</h2>
          <div class="features-logos">
            <img src="assests/images/featur-logo/f-4.png" alt="feature-logo" title="Feature-logo" />
            <img src="assests/images/featur-logo/f-2.png" alt="feature-logo" title="Feature-logo" />
            <img src="assests/images/featur-logo/f-5.png" alt="feature-logo" title="Feature-logo" />
            <img src="assests/images/featur-logo/f-2.png" alt="feature-logo" title="Feature-logo" />
            <img src="assests/images/featur-logo/f-3.png" alt="feature-logo" title="Feature-logo" />
          </div>
        </div>
      </section>
      <!-----------------------------------------------------------
                            features-logo-section-end
      ----------------------------------------------------------->

      <!-----------------------------------------------------------
                            work-section-start
      ----------------------------------------------------------->
      <section class="section-how-work">
        <div class="container-grid">
          <span class="subheading">How it works</span>
          <h2 class="heading-secondary">Your daily dose if health in 3 simple steps</h2>
        </div>
        <!-- step-1 -->
        <div class="container-grid grid grid--2-cols grid--center-v">
          <div class="step-text-box">
            <p class="step-number">01</p>
            <h3 class="heading-tertiary">Telll us what what you like (and what not)</h3>
            <p class="step-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sequi mollitia illum voluptas, atque maiores earum eaque consequuntur.
              Animi, similique.
            </p>
          </div>
          <div class="step-img-box">
            <img class="step-img" src="assests/images/work-silder.png" alt="" />
          </div>
        </div>
        <!-- step-2 -->
        <div class="container-grid grid grid--2-cols grid--center-v">
          <div class="step-img-box">
            <img class="step-img" src="assests/images/work-silder.png" alt="" />
          </div>
          <div class="step-text-box">
            <p class="step-number">02</p>
            <h3 class="heading-tertiary">Approve your weekly meal plan</h3>
            <p class="step-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sequi mollitia illum voluptas, atque maiores earum eaque consequuntur.
              Animi, similique.
            </p>
          </div>
        </div>
        <!-- step-3 -->
        <div class="container-grid grid grid--2-cols grid--center-v">
          <div class="step-text-box">
            <p class="step-number">03</p>
            <h3 class="heading-tertiary">Receive meal at convenient time</h3>
            <p class="step-description">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum sequi mollitia illum voluptas, atque maiores earum eaque consequuntur.
              Animi, similique.
            </p>
          </div>
          <div class="step-img-box">
            <img class="step-img" src="assests/images/work-silder.png" alt="" />
          </div>
        </div>
      </section>
      <!-----------------------------------------------------------
                            work-section-end
      ----------------------------------------------------------->

      <!-----------------------------------------------------------
                          meals-section-start
      ----------------------------------------------------------->
      <section class="meals-section" id="meals">
        <div class="container-grid text-center">
          <span class="subheading">Meals</span>
          <h2 class="heading-secondary">Omnifood AI chooses from <span class="btn-text-orange">5,000+</span> recepies</h2>
        </div>
        <div class="container-grid grid grid--3-cols margin-bottom-md">
          <!----------------------- meals-1------------------------>
          <div class="meal">
            <img class="meal-img" src="assests/images/meal-01.jpg" alt="Japanese Gyozas" />
            <div class="meal-content">
              <div class="meals-tag">
                <span class="tag tag--vegeterian">Vegetarian</span>
              </div>
              <p class="meal-title">Japanese Gyozas</p>
              <ul class="meal-attributes">
                <li class="meal-attribute-list"><span class="meal-icon icon-fire"></span> <strong>650</strong> calories</li>
                <li class="meal-attribute-list"><span class="meal-icon icon-restaurant"></span> Nutriscore &reg; <strong>74</strong></li>
                <li class="meal-attribute-list"><span class="meal-icon icon-star"></span> <strong>4.9</strong> rating (537)</li>
              </ul>
            </div>
          </div>
          <!-------------------- meals-2-------- -->
          <div class="meal">
            <img class="meal-img" src="assests/images/salad-food.jpg" alt="Avocado salad" />
            <div class="meal-content">
              <div class="meals-tag">
                <span class="tag tag--vegan">Vegan</span>
                <span class="tag tag--paleo">Palego</span>
              </div>
              <p class="meal-title">Avocado salad</p>
              <ul class="meal-attributes">
                <li class="meal-attribute-list"><span class="meal-icon icon-fire"></span> <strong>400</strong> calories</li>
                <li class="meal-attribute-list"><span class="meal-icon icon-restaurant"></span>Nutriscore&reg;<strong>92</strong></li>
                <li class="meal-attribute-list"><span class="meal-icon icon-star"></span> <strong>4.7</strong> rating (442)</li>
              </ul>
            </div>
          </div>
          <div class="diate">
            <h3 class="heading-tertiary">Works with any diet:</h3>
            <ul class="list">
              <li class="list-item"><span class="icon-check d-l-icon"></span> Vegetarian</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Vegean</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Pscatarian</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Gluteen-free</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Lactose-free</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Ketos</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Paleo</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Low Foodmap</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span> Kid-Freindly</li>
            </ul>
          </div>
        </div>
        <div class="container-grid all-recepies">
          <a href="#" class="link-btn">See all &rarr; </a>
        </div>
      </section>
      <!-----------------------------------------------------------
                          meals-section-end
      ----------------------------------------------------------->

      <!-----------------------------------------------------------
                          testomonial-sectionn-start
      ----------------------------------------------------------->
      <section class="testomonial-section" id="testomonials">
        <div class="testomonials-container">
          <span class="subheading">Testomonials</span>
          <h4 class="heading-secondary testomonial-h">Once you try it.</h4>
          <!---- testomonial-01-- -->
          <div class="testomonials">
            <figure class="testomonial">
              <img class="testomonial-img" src="assests/images/delevered-img/d- (3).jpg" alt="photo-lady" />
              <blockquote class="testomonial-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, dolorem psum dolor sit.
              </blockquote>
              <p class="testomonial-name">&mdash; Dev Bryson</p>
            </figure>
            <!-- testomonial-2 -->
            <figure class="testomonial">
              <img class="testomonial-img" src="assests/images/delevered-img/d- (2).jpg" alt="photo-lady" />
              <blockquote class="testomonial-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, dolorem psum dolor sit.
              </blockquote>
              <p class="testomonial-name">&mdash; Ben Hadley</p>
            </figure>
            <!-- testomonial-3 -->
            <figure class="testomonial">
              <img class="testomonial-img" src="assests/images/delevered-img/d- (4).jpg" alt="photo-lady" />
              <blockquote class="testomonial-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, dolorem psum dolor sit.
              </blockquote>
              <p class="testomonial-name">&mdash; Steve Millery</p>
            </figure>
            <!-- testomonial-4 -->
            <figure class="testomonial">
              <img class="testomonial-img" src="assests/images/delevered-img/d- (1).jpg" alt="photo-lady" />
              <blockquote class="testomonial-text">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolores, dolorem psum dolor sit.
              </blockquote>
              <p class="testomonial-name">&mdash; Hnnah smith</p>
            </figure>
          </div>
        </div>
        <!-----------------------------------------------------------
                          testomonial-sectionn-end
      ----------------------------------------------------------->

        <!-----------------------------------------------------------
                          testomonial-gallery-section-start
        --------------------------------------------------------=---->
        <div class="testomonial-gallery">
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-1.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-2.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-3.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-4.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-5.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-6.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/food-7.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img src="assests/images/gallery/eat-food-3.jpg" alt="" />
          </figure>
          <figure class="gallery-item">
            <img id="none" src="assests/images/gallery/eat-food-1.jpg" alt="" />
          </figure>
        </div>
      </section>
      <!-----------------------------------------------------------
                          testomonial-gallery-section-end
        --------------------------------------------------------=---->

      <!-----------------------------------------------------------
                          pricing-sectionn-start
        ------------------------------------------------------------>
      <section class="pricing-section" id="price">
        <div class="container-grid text-center">
          <span class="subheading">Pricing</span>
          <h2 class="heading-secondary">Eating well without any breaking bank</h2>
        </div>
        <div class="container-grid grid grid--2-cols">
          <div class="price-plan price-plan-content">
            <header class="price-header">
              <p class="p-plan-name">Starter</p>
              <p class="plan-price"><span class="icon-dollar"></span> 399</p>
              <p class="plan-text">per month.That's just $13 per meal.</p>
            </header>
            <ul class="list">
              <li class="list-item"><span class="icon-check d-l-icon"></span>1 meal per day</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span>Order time are between 24hrs</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span>Delivery is free</li>
              <li class="list-item"><span class="icon-close d-l-icon"></span></li>
            </ul>
            <div class="plan-sign-up">
              <a href="#" class="btn btn-full">Start eating well</a>
            </div>
          </div>
          <!-- price-secton-02 -->
          <div class="price-plan price-plan-complete">
            <header class="price-header">
              <p class="p-plan-name">Complete</p>
              <p class="plan-price"><span class="icon-dollar"></span> 649</p>
              <p class="plan-text">per month.That's just $13 per meal.</p>
            </header>
            <ul class="list">
              <li class="list-item"><span class="icon-check d-l-icon"></span><strong>2 meals</strong> per day</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span>Order<strong>24/7</strong></li>
              <li class="list-item"><span class="icon-check d-l-icon"></span>Delivery is free</li>
              <li class="list-item"><span class="icon-check d-l-icon"></span>Get access to latest recipes</li>
            </ul>
            <div class="plan-sign-up">
              <a href="#" class="btn btn-full">Start eating well</a>
            </div>
          </div>
        </div>
        <div class="container-grid grid">
          <aside class="plan-details">Price include all applicable taxes. You can cancel at any time.Both plan including the following:</aside>
        </div>
        <!-- --------------------most-features -------------------->
        <div class="container-grid grid grid--4-cols">
          <div class="features">
            <span class="icon-subscriptions features-icon"></span>
            <p class="features-title">Never coock again!</p>
            <p class="features-text">Our subscriber cover 385 per days, even includig major holidays</p>
          </div>
          <!-- f-2 -->
          <div class="features">
            <span class="icon-apple features-icon"></span>
            <p class="features-title">Local and organic!</p>
            <p class="features-text">Our cock only use local fresh and organic products to prepare your meal.</p>
          </div>
          <!-- f-3 -->
          <div class="features">
            <span class="icon-leaf features-icon"></span>
            <p class="features-title">No waste</p>
            <p class="features-text">All our partners only use reusable container to package all your meals.</p>
          </div>
          <!-- f-4 -->
          <div class="features">
            <span class="icon-pause features-icon"></span>
            <p class="features-title">Pause anytime!</p>
            <p class="features-text">Going on vacation just pause your subscription</p>
          </div>
        </div>
      </section>
      <!-----------------------------------------------------------
                          pricing-sectionn-end
        ------------------------------------------------------------>

      <!-----------------------------------------------------------
                          contact-sectionn-start
        ------------------------------------------------------------>
      <section class="contact-us" id="get-free">
        <div class="container-grid grid">
          <div class="contact">
            <div class="contact-text-box">
              <h2 class="heading-secondary">Get your first meal for free!</h2>
              <p class="contact-text">
                healthy, tasty and hassie -free meals are waiting for you. healthy, tasty and hassie -free meals are waiting for you.
              </p>
              <form action="#" method="get" class="contact-form">
                <div>
                  <label for="name" class="">Name</label>
                  <input type="text" name="#" id="name" placeholder="Toufiq" />
                </div>
                <div>
                  <label for="email" class="">Email</label>
                  <input type="email" name="#" id="email" placeholder="example@gmail.com" />
                </div>
                <div>
                  <label for="select-where" class="">Where did you hear from us?</label>
                  <select name="#" id="select-where">
                    <option value="option">Choose option</option>
                    <option value="friends">friends & Family</option>
                    <option value="Youtube">Youtube Video</option>
                  </select>
                </div>
                <button class="btn btn-submit">Sign up now</button>
              </form>
            </div>
            <div class="contact-img-box"></div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include ('footer.php'); 
    
     ?>
    <!-----------------------------------------------------------
                          contact-sectionn-end
    ------------------------------------------------------------>
    <link rel="stylesheet" href="../akota_shop/assests/js/jquery-3.6.1.min.js">
    <link rel="stylesheet" href="../akota_shop/assests/js/main.js">
    <link rel="stylesheet" href="../akota_shop/assests/js/my-script.js">
</body>
</html>