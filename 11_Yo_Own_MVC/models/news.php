<?php
/**
 * The News Model does the back-end heavy lifting for the News Controller
 */

class News_Model
{

    /**
     * Array of articles. Array keys are titles, array values are corresponding
     * articles.
     */

    private $_articles = array 
    (
        //first article
        'website' => array
        (
            'title' => 'Website',
            'content' => 'Welcome to the site! We are glad you made it!'
        ),
        //second article
        'mvc' => array
        (
            'title' => 'MVC with PHP',
            'content' => 'Making an MVC framework with PHP is soooo easy!'
        ),
        //third article
        'next' => array
        (
            'title' => 'What\'s Next?',
            'content' => 'Well.. update the view. Consider a full blown templatre engine like Smarty or Twig or Blade!'
        )
    );

    public function __construct() 
    {
    }

    /**
     * Fetches article based on supplied name
     * 
     * @param string $articleName
     * 
     * @return array $article
     */
    public function get_article($articleName)
    {
        $article = $this->_articles[$articleName];

        return $article;
    }
}