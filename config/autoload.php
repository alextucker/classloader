<?php
// Example config. Visit http://symfony.com/doc/2.0/cookbook/tools/autoloader.html
// for more information about to how load packages. 
// It is suggested that you place all packages under a 'vendor' directory
// like below.
return array(
   'register' => array(
      'Behat\\Mink' => DOCROOT.'vendor/mink/src',         
      'Selenium' => DOCROOT.'vendor/selenium/src',         
   ),
);
