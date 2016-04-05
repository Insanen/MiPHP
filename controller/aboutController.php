<?php

class aboutController extends baseController
{
    public function index()
    {
        /*** set a template variable ***/
        $this->registry->template->welcome = 'Insanen Solutions MiPHP';
        $this->registry->template->firstslider = 'img/banner.jpg';
        $this->registry->template->secondslider = 'img/banner2.jpg';
        $this->registry->template->thirdslider = 'img/banner3.jpg';
        $this->registry->template->fourthslider = 'img/banner4.jpg';
        /*** load the index template ***/
        $this->registry->template->show('about_index');
    }
}
