<?php

Class error404Controller Extends baseController {

public function index()
{
        $this->registry->template->blog_heading = '404';
        $this->registry->template->firstslider = 'img/banner.jpg';
        $this->registry->template->secondslider = 'img/banner2.jpg';
        $this->registry->template->thirdslider = 'img/banner3.jpg';
        $this->registry->template->fourthslider = 'img/banner4.jpg';
        $this->registry->template->show('error404');
}

}
?>
