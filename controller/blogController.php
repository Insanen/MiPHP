<?php

Class blogController Extends baseController {

public function index()
{
        $this->registry->template->blog_heading = 'Blog Entries';
        $this->registry->template->firstslider = 'img/banner.jpg';
        $this->registry->template->secondslider = 'img/banner2.jpg';
        $this->registry->template->thirdslider = 'img/banner3.jpg';
        $this->registry->template->fourthslider = 'img/banner4.jpg';
        $this->registry->template->show('blog_index');
}


public function view(){

	$this->registry->template->blog_heading = 'Heading';
	$this->registry->template->blog_content = 'Content';
  $this->registry->template->firstslider = 'img/banner.jpg';
  $this->registry->template->secondslider = 'img/banner2.jpg';
  $this->registry->template->thirdslider = 'img/banner3.jpg';
  $this->registry->template->fourthslider = 'img/banner4.jpg';
	$this->registry->template->show('blog_view');
}

}
