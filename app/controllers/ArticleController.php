<?php

class ArticleController extends BaseController{
	public function showIndex(){
		return View::make('gautam');
	}
	public function showSingle($articleId){
		return View::make('birthday');
	}
}
?>