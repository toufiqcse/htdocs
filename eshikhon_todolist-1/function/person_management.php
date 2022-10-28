<?php


function person_information()
{

    $person_data = [
        (object)[
            'id' => 'Person 1',
            'name' => 'Md Iqbal Hossain',
            'email' => 'Md_Iqbal_Hossain@gmail.com',
            'profile_image' => 'person_image_1.jpg'
        ],
        (object)[
            'id' => 'Person 2',
            'name' => 'Sadia Shams',
            'email' => 'Sadia_Shams@gmail.com',
            'profile_image' => 'person_image_2.jpg'
        ],
        (object)[
            'id' => 'Person 3',
            'name' => 'Farid Nizam',
            'email' => 'Farid_Nizam@gmail.com',
            'profile_image' => 'person_image_3.jpg'
        ],
        (object)[
            'id' => 'Person 4',
            'name' => 'Nayan Ray',
            'email' => 'Nayan_Ray@gmail.com',
            'profile_image' => 'person_image_4.jpg'
        ],
        (object)[
            'id' => 'Person 5',
            'name' => 'Tanveer',
            'email' => 'tanveer@gmail.com',
            'profile_image' => ''
        ]
    ];


    return $person_data;
}



    function gallery_person_view($person_info)
    {  
        
        foreach($person_info as $info_key=>$info_val){
        
        ?>


        <div class="information_section" id="information_section_1">

            <h1>Information <?php echo ++$info_key; ?></h1>

            <img class="img-fluid" src="assets/images/person_images/<?php echo $info_val->profile_image  ?>" alt="<?php echo $info_val->name  ?>" title="<?php echo $info_val->name  ?>">

            <ul>
                <li>ID:<?php echo $info_val->id  ?></li>
                <li>Name:<?php echo $info_val->name  ?></li>
                <li>Email:<?php echo $info_val->email  ?></li>
            </ul>

        </div>



    <?php 
    
        }// end of foreach

    }// ens of function




?>