<ol>
                    <?php 
                    echo "Registraion page".$_SESSION['greeatings'];
                    // php-array
                     $participants_name = ['Toufiq', 'Shadia', 'Neela', 'Rafiq'];
                     echo '<pre>';
                     print_r($participants_name);
                     echo '</pre>';
                    //two dimentional array
                    $participants_name_email = [
                        ['Neela', 'neelacse8@gnail.com'],
                        ['Toufiq', 'toufiqhasan714@gmail.com']
                    ];
                    
                    echo 'Name: ' .$participants_name_email[1][0].'<br>';
                    echo 'Email: ' .$participants_name_email[1][1].'<br>';
                    

                     $length = count($participants_name);
                    //  echo $participants_name[2];
                    sort($participants_name);
                     //var-dump
                     for($i = 0; $i < $length; $i++) { ?>
                       <li> <?php echo $participants_name[$i] ?> </li>
                    <?php
                     }
                    ?>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <!-- //assciative content -->
                     <?php
                        $associative_index = [
                            [ 'name' => 'Toufiq',
                                'email' => 'toufiq@gmail.com',
                                'contact' => '01756588',
                                'is_status' => 'active',
                                'address' => [
                                    'present' => 'Dhaka',
                                    'permanent' => 'Joypurhat'
                                ]
                            ],
                            [
                                'name' => 'Rabiul',
                                'email' => 'robi076@gmail.com',
                                'contact' => '013434588',
                                'is_status' => 'Inactive',
                                'address' => [
                                    'present' => 'Bogura',
                                    'permanent' => 'Jashore'
                                ]                           
                            ],
                        ];
                        //foreach-loopp-one dimentional -->
                        // foreach($associative_index as $key => $value){
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
                        foreach ($associative_index as $key => $value){
                            echo "<h2> Information of ".$value['name']."</h2>";
                            echo "<li> Name: ".$value['name']."</li>";
                            echo "<li> Email: ".$value['email']."</li>";
                            echo "<li> Contact: ".$value['contact']."</li>";
                            echo "<li> Address: ".$value['address']['present']."</li>";
                            echo "</ul>";
                        }
                     ?>
                     <?php 
                      //check index of
                      if(isset($_POST['email'])){
                        echo "yes index is set";
                      }else{
                        echo "no index is not set";
                      }
                     ?>