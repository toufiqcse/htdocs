<?php 
    function person_information(){
        $person_data = [
           (object)[
                'id' => 'person-1',
                'name' => 'John Smith',
                'email' => 'john34@gmail.com',
                'profile_image' => 'person-1.jpg'
            ],
            (object)[
                'id' => 'person-2',
                'name' => 'Hasan Ali',
                'email' => 'hasan34@gmail.com',
                'profile_image' => 'person-2.jpg'
            ],
            (object)[
                'id' => 'person-3',
                'name' => 'Shadia',
                'email' => 'sadia34@gmail.com',
                'profile_image' => 'person-3.jpg'
            ],
            (object)[
                'id' => 'person-4',
                'name' => 'Anjuman',
                'email' => 'anju34@gmail.com',
                'profile_image' => 'person-4.jpg'
            ],
        
        ];
        return $person_data; 
    }

    function gallery_person__view($person_info){
        
    }
    
?>