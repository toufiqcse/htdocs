<?php

$title = '&nbsp;&nbsp;Home';

include('header.php'); ?>
<!-- start content area -->

<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h2>Gallery Page</h2>


                    <?php 
                    /**
                     *  @get person information by calling person_information function
                     *  @function will return array of object
                     */
                    $person_info = person_information();

                    // load person view:
                    gallery_person_view($person_info);

                    ?>

                </div>
            </div>
        </div>

    </div>

</div>

<!-- end of content area -->
<?php include('footer.php'); ?>