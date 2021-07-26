<?php

    $email = null;

    if($session != null)
        $user = $session->user;
    if($user != null)
        $profile = $user->profile;
    if($profile != null)
        $email = $user->email;
    return $email;

    //uporer kaj tuku only nicher code tukur maddhome kora jai

    $email = $session?->user?->profile?->email

?>