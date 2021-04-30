<?php
    class ScrapController {
        private $url;
        private $data;
        
        public function __construct($url) {
            require('simplehtmldom/simple_html_dom.php');
            $html = file_get_html($url);

            $title = $html->find('title', 0);

            echo $html;
            
        }
    }
?>