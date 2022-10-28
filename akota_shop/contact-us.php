<?php
   $title = ('Contact US');
    include('header.php');
    ?>
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
    <!-----------------------------------------------------------
                         contact-sectionn-end
    ------------------------------------------------------------>
    <?php
    include ('footer.php'); 
     ?>