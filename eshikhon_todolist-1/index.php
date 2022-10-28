<?php 

    $title = '&nbsp;&nbsp;Home';

include('header.php'); ?>
    <!-- start content area -->

    <div class="container">

        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-body">

                    <?php

                            $_SESSION['greetings'] = "Hello Developer!";
                            echo $_SESSION['greetings']. 'This is index page!';
                            
                                for($start = 1; $start <=10;$start++){ ?> 

                        <h3><?php echo $greetings.' Paragraph-'.$start ?></h3>
                        <p>
                            <span class="text-primary">Home page</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum ducimus voluptate sed, quis doloribus commodi, ipsa dignissimos a nulla aliquam minus alias maiores iusto veniam excepturi et sunt quos inventore omnis repellat? Asperiores obcaecati architecto eos natus numquam cupiditate, hic velit praesentium facilis, necessitatibus quae non, itaque cumque maiores doloremque! Impedit nemo minus alias aliquid, libero repellat totam at illo, quae commodi ea soluta consequuntur? Illum numquam doloribus corrupti aperiam assumenda perferendis sint aliquid veniam accusantium magni, eaque recusandae voluptatum exercitationem dolor inventore possimus beatae maxime! Reiciendis, cum est ducimus eius maxime quisquam quaerat, rem corrupti saepe cumque iure tempore.
                        </p>

                        <?php }
                            
                            
                            ?>
                        <p>
                        
                            <?php
                            
                                for($start = 1; $start <=10;$start++){ ?> 


                                    <h3><?php echo $start ?></h3>



                                <?php }
                            
                            
                            ?>

                        </p>

                    </div>
                </div>
            </div>

        </div>

    </div>

    <!-- end of content area -->
<?php include('footer.php'); ?>