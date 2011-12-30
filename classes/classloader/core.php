<?php

abstract class Classloader_Core {

   public static function register($config = null) {
      require_once Kohana::find_file('vendor', 'symfony/ClassLoader/UniversalClassLoader');
      use Symfony\Component\ClassLoader\UniversalClassLoader;

      if($config == null) {
	 $config = Kohana::config('autoload')->register;
      }

      $loader = new UniversalClassLoader();
      $loader->registerNamespaces($config);
      $loader->register();
   }


}
