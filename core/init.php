<?php

 include __SITE_PATH . '/core/' . 'ctrl.class.php';
 include __SITE_PATH . '/core/' . 'registry.class.php';
 include __SITE_PATH . '/core/' . 'router.class.php';

 include __SITE_PATH . '/core/' . 'template.class.php';

    function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/model/' . $filename;

    if (file_exists($file) == false)
    {
        return false;
    }
  include ($file);
}

 $registry = new registry;
//$registry->db = db::getInstance();
