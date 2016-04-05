<?php
 error_reporting(E_ALL);
 define( 'ROOT_DIR', dirname(__FILE__) );
 $site_path = realpath(dirname(__FILE__));
 define ('__SITE_PATH', $site_path);
 include 'core/init.php';
 include 'core/header.php';
 $registry->router = new router($registry);
 $registry->router->setPath (__SITE_PATH . '/controller');
 $registry->template = new template($registry);
 $registry->router->loader();
 include 'core/footer.php';
?>
