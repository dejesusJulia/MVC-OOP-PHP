<?php

foreach($data['users'] as $user){
    echo 'ID:' . $user->user_id . '<br>';
    echo 'Name: ' . $user->user_name . '<br>';
    echo 'Email: ' . $user->user_email . '<br>';
    echo 'Password: ' . $user->password . '<br> <br>';
}