<?php

    // $books = ['bangla', 'math', 'physics', 'social science', 'English'];
    // echo '<pre>';
    // print_r($books);
    // echo '<pre>';

    // $books_keys = array_keys($books);
    // $books_values = array_values($books);


    // $shift = array_shift($books);
    // $pop = array_pop($books);

    // $new_books  =   ['geography', 'Grammer'];
    // $new_books_2  =   ['new books 3', 'new books 4'];

    // $un_shift = array_unshift($books, 'geography', 'Grammer');
    // $push = array_push($books, 'geography', 'Grammer');

    // $merge = array_merge($books,$new_books,$new_books_2);

    // $colors = ['red', 'blue', 'white', 'black'];
    // $colors2 = ['red', 'green', 'white', 'orange'];
    // $colors3 = ['yy','light yellow', 'green', 'white'];


    // $diff = array_diff($colors, $colors2, $colors3);


    // $permissions = ['add', 'edit', 'delete', 'list', 'print', 'report'];

    // $user_1_permission = ['add', 'list', 'print'];


    // foreach($user_1_permission as $permission){

    //     if(in_array($permission, $permissions)){
    //         echo 'User has '.$permission.' Permission<br>';
    //     }

    // }



    $my_sentence = "This is a string text!";

    $sentence_array = explode(' ', $my_sentence);
    $v = sort($sentence_array, SORT_FLAG_CASE);

    echo '<pre>';
    print_r($sentence_array);
    print_r($v);
    echo '<pre>';
    exit;
    
    
    


?>