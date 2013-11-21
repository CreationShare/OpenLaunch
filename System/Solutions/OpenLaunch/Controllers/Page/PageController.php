<?php

class PageController extends AppController {
	public function view($id) {
		$page = new Page($id);
		
		if (!$page->exists()) return new NotFoundError();
		$this->page = $page;
		$this->html = $page->getHtml();
		
		if ($this->html instanceof AjaxResponse || $this->html instanceof Redirect) return "".$this->html;
	}
}