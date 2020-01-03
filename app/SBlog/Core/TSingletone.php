<?php
/**
 * Created by PhpStorm.
 * User: KaDRuSS
 * Date: 27.12.2019
 * Time: 0:36
 */

namespace App\SBlog\Core;


trait TSingletone
{
   private static $instance;
   public static function instance() {
       if (self::$instance === null) {
           self::$instance = new self;
       }
       return self::$instance;
   }

}
