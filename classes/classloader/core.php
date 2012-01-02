<?php defined('SYSPATH') or die('No direct script access.');
/**
 * This is wrapper for Fabien Potencier's Symfony2 ClassLoader class.
 * The intention is to make any PSR-0 compatible namespaced package loadable
 * by Kohana 3.x without writing seperate wrappers for every package.
 * @license MIT
 * @author Alex Tucker (github: alextucker)
 */
include Kohana::find_file('vendor', 'symfony/ClassLoader/UniversalClassLoader');
use Symfony\Component\ClassLoader\UniversalClassLoader;

abstract class Classloader_Core {
   public static function register($config = null) {
      if($config == null) {
	 $config = Kohana::config('autoload')->register;
      }
      $loader = new UniversalClassLoader();
      $loader->registerNamespaces($config);
      $loader->register();
   }
}
