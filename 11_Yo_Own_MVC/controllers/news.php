<?php
/**
* This file handles the retrieval and serving of news articles
*/
class News_Controller {
    /**
    * This template variable will hold the 'view' portion of our MVC for this 
    * controller
    */
    public $template = 'news';
    /**
    * This is the default function that will be called by router.php
    * 
    * @param array $getVars the GET variables posted to index.php
    */
    public function main(array $getVars) {
        $newsModel = new News_Model;

        $article = $newsModel->get_article($getVars['article']);

        $view = new View_Model($this->template);

        $view->assign('title', $article['title']);
        $view->assign('content', $article['content']);
    }
}
