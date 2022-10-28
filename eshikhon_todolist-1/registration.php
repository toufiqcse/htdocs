<?php

$title = '&nbsp;&nbsp;Registration';

include('header.php'); ?>
<!-- start content area -->

<div class="container">

    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-body">


                    <div class="row">

                        <div class="col-md-6">
                            </ol>
                            <?php

                            echo 'Registration page '.$_SESSION['greetings'];

                            $participants_name = ['Tiyas', 'Ajmal Hossain', 'Chandni Kahtun', 'Mehraj Mahmood'];


                            echo '<pre>';
                            print_r($participants_name);
                            echo '</pre>';


                            $participants_name_email = [
                                ['Tiyas', 'Tiyas@gmail.com'],
                                ['Ajmal Hossain', 'Ajmal_Hossain@gmail.com']
                            ];

                            echo '<pre>';
                            print_r($participants_name_email);
                            echo '</pre>';

                            echo 'Name: ' . $participants_name_email[1][0] . '<br>';
                            echo 'Email: ' . $participants_name_email[1][1] . '<br>';


                            sort($participants_name);

                            //var_dump()


                            $length = count($participants_name);

                            for ($i = 0; $i < $length; $i++) { ?>


                                <li><?php echo $participants_name[$i] ?></li>


                            <?php }

                            ?>


                        </div>
                        <div class="col-md-6">

                            <?php 

                                $participants_number_index =  ['p1', 'p2', 'p3'];

                                $participants_associative_index =  [
                                    [
                                        'name' => 'Tiyas',
                                        'email' => 'Tiyas@gmail.com',
                                        'contact' => '123456',
                                        'is_status' => 'active',
                                        'address'   => [
                                            'present' => 'Tiyas present address',
                                            'permanent' => 'Tiyas permanent address'
                                        ]
                                    ],
                                    [
                                        'name' => 'Ajmal Hossain',
                                        'email' => 'Ajmal_Hossain@gmail.com',
                                        'contact' => '8569874',
                                        'is_status' => 'inactive',
                                        'address'   => [
                                            'present' => 'present address',
                                            'permanent' => 'permanent address'
                                        ]
                                    ],
                                ];

                                // echo '<pre>';
                                // print_r($participants_number_index);
                                // print_r($participants_associative_index);
                                // echo '<pre>';

                                // echo $participants_associative_index[0]['address']['permanent'];

                                // echo $participants_info['index_1'];

                                // foreach

                                // foreach($participants_associative_index as $key=>$value){
                                    

                                //     if($key == 'email' || $key == 'contact'){
                                //         if($key == 'email'){
                                //             echo "Email: ".$value.'<br>';
                                //         }
                                //         if($key == 'contact'){
                                //             echo "Contact: ".$value.'<br>';
                                //         }
                                //     }

                                // }

                                echo "<ul>";
                                foreach($participants_associative_index as $key=>$value){
                                    
                                    echo "<h2>Information of ".$value['name']."</h2>";
                                    echo "<ul>";
                                    echo "<li>Name: ".$value['name']."</li>";
                                    echo "<li>Email: ".$value['email']."</li>";
                                    echo "<li>Contact: ".$value['contact']."</li>";
                                    echo "</ul>";
                                    
                                    
                                }
                                
                                


                            ?>


                        </div>

                    </div>


                    <ol>
                </div>
            </div>
        </div>

    </div>

</div>

<!-- end of content area -->
<?php include('footer.php'); ?>