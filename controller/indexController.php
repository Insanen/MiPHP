<?php
/*
    Name: MiPHP
    Description: 
    Version: 1.0.2
*/

/**
 *  @version	1.0.2
 */

class indexController extends baseController
  {
      public function index()
      {
          $this->registry->template->welcome = 'Insanen Solutions MiPHP';
          $this->registry->template->firstslider = 'img/banner.jpg';
          $this->registry->template->secondslider = 'img/banner2.jpg';
          $this->registry->template->thirdslider = 'img/banner3.jpg';
          $this->registry->template->fourthslider = 'img/banner4.jpg';
          $this->registry->template->show('index');
      }
  }
