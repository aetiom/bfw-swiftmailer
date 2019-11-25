<?php
/**
 * Config file for BFW Swiftmailer
 * 
 * @author Aetiom <aetiom@protonmail.com>
 * @package BFW Swiftmailer
 * @version 1.0
 */

return [
    /**
     * 
     */
    'transport' => 'sendmail',

    /**
     * 
     */
    'path' => '/usr/sbin/sendmail -t',
    
    /**
     * 
     */
    'server' => 'smtp.example.org',
    
    /**
     * 
     */
    'port' => 25,
    
    /**
     * 
     */
    'username' => 'username',
    
    /**
     * 
     */
    'password' => 'password'
];