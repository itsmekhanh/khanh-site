<?php

class TumblrManager{
    protected $_tumblrManager;
    private $consumer_key = "b3ceq6L4SAk28pxX0gpUsXZrcgtQlv82Uakpx6Ki2GIlSn5eNY";
    private $secret_key = "GMq0B2peItbn4LC75nnoYhHHwQvRrLxuMz2nbb26k3oB2q6GWP";
    private $hostname = "khanhluc.tumblr.com";
    
    function __construct() {}
    
    public function setHostname($hostname){
        $this->hostname = $hostname;
    }
    
    protected function getCurl($url){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_URL, $url);
        return $ch;
    }
    
    public function getPosts($offset, $limit){
        $url = "api.tumblr.com/v2/blog/{$this->hostname}/posts?api_key={$this->consumer_key}&reblog_info=true&notes_info=true&limit={$limit}&offset={$offset}";
        $data = json_decode(curl_exec($this->getCurl($url)),true);
        
        
        $posts = array();
        if(!empty($data)){
            if(!empty($data['response']['posts'])){
                foreach($data['response']['posts'] as $post){
                    $posts[] = $this->formatPost($post);
                }
            }
        }
        return $posts;
    }
    
    public function getPostById($id){
        
    }
    
    public function formatPost($post){
        $html = "<div class='tumblr-post span4 shadow1 border1'>";
        switch($post['type']){
            case 'photo':
                if(!empty($post['photos'][0]['alt_sizes'])){
                    $html .= "<img src='{$post['photos'][0]['alt_sizes'][1]['url']}'/>";
                }
                if(!empty($post['caption'])){
                    $html .= $post['caption'];
                }
                break;
            case 'video':
                $html .= "<img src='".$post['thumbnail_url']."'/>";
                break;
            case 'text':
                $html .= $post['body'];
                break;
            case 'quote':
                $html .= "<p>".$post['text']."</p>";
                break;
            case 'link':
                break;
            case 'audio':
                break;
        }
        $html .="</div>";
        return $html;
    }
}
?>
