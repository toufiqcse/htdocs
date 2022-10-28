<?php


function person_information()
{

    $person_data = [
        (object)[
            'id' => 'Actress Gallery',
            'name' => 'Biddiya Sinha',
            'blog_type' => 'Personal blog',
            'add_freinds' => 'Follow' ,
            'follower' => '33k followers', 
            'profile_image' => 'person-1.jpg',
            'mutual_freind' => [
                'image-1' => 'mutual-5.jpg',
                'image-2' => 'mutual-2.jpg',
            ]
        ],
               
        (object)[
            'id' => 'Bollywood Actor',
            'name' => 'Neha Sharma',
            'blog_type' => 'Public figure',
            'follower' => '101k followers', 
            'add_freinds' => 'Follow' ,
            'profile_image' => 'person-2.jpg',
            'mutual_freind' => [
                'image-1' => 'mutual-1.jpg',
                'image-2' => 'mutual-3.jpg',
            ]
        ],
        (object)[
            'id' => 'Indians Girl',
            'name' => 'Shrabonti',
            'blog_type' => 'Actor',
            'follower' => '66k followers', 
            'add_freinds' => 'Follow' ,
            'profile_image' => 'person-3.jpg',
            'mutual_freind' => [
                'image-1' => 'mutual-5.jpg',
                'image-2' => 'mutual-2.jpg',
            ]
        ],
        (object)[
            'id' => 'Rashmika, Cute Smile',
            'name' => 'Mandana',
            'blog_type' => 'Actor',
            'follower' => '300k followers', 
            'add_freinds' => 'Follow' ,
            'profile_image' => 'person-4.jpg',
            'mutual_freind' => [
                'image-1' => 'mutual-6.jpg',
                'image-2' => 'mutual-4.jpg',
            ]
        ], 
        
        (object)[
            'id' => 'Linda',
            'name' => 'Fariha Zaheen',
            'blog_type' => '',
            'follower' => '3 mutual freinds',
            'add_freinds' => 'Follow' ,
            'profile_image' => 'mutual-5.jpg',
            'mutual_freind' => [
                'image-1' => 'mutual-5.jpg',
                'image-2' => 'mutual-4.jpg',
            ]
            ],
            (object)[
                'id' => 'Siddik',
                'name' => 'Asik hasan',
                'blog_type' => 'Personal',
                'follower' => ' 22k followers',
                'add_freinds' => 'Follow' ,
                'profile_image' => 'mutual-5.jpg',
                'mutual_freind' => [
                    'image-1' => 'mutual-5.jpg',
                    'image-2' => 'mutual-4.jpg',
                ]
                ],
            
        
        
       
        
        
    ];


    return $person_data;
}



function gallery_person_view($person_info)
{  
    
    foreach($person_info as $info_key=>$info_val){
    
    ?>


    <div class="information_section" id="information_section_1">
    
        <h4 class="text-center">
            <?php echo $info_val->name  ?>
        </h4>

        <img class="img-fluid profile-img" src="assests/images/<?php echo $info_val->profile_image  ?>" alt="<?php echo $info_val->name  ?>" title="<?php echo $info_val->name  ?>">

            <div class="follow-item">
                <p class="folllow-heading"><?php echo $info_val->id  ?></p>
                <p><?php echo $info_val->blog_type  ?></p>

            
                <div class="mutual_freind d-flex">
                    <img class="mutual-img" src="assests/images/<?php echo $info_val->mutual_freind['image-1']  ?> " alt="<?php echo $info_val->name  ?>" >
        
                    <span class="mb-5 px-4"><?php echo $info_val->follower  ?></span>

                    
                </div>
            </div>
        

        <input type="button" value="<?php echo $info_val->add_freinds  ?>" name="follow" class="btn btn-primary mt-5" id="follow-btn">
    </div>  



<!-- Page section -->
 
<?php 

    }// end of foreach

}// ens of function


//<?php echo ++$info_key;

?>


