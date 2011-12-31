<?php
include Kohana::find_file('vendor', 'symfony/ClassLoader/UniversalClassLoader');
use Symfony\Component\ClassLoader\UniversalClassLoader;

abstract class Classloader_Core {

   public static function register($config = null) {
      
      if($config == null) {
	 $config = Kohana::config('autoload')->register;
	 echo Debug::vars($config);
      }

      $loader = new UniversalClassLoader();
      $loader->registerNamespaces($config);
      $loader->register();
   }


}
