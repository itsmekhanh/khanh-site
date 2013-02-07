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
                    $posts[] = array('formatted'=>$this->formatPost($post), 'post'=>$post);
                }
            }
        }
        return $posts;
    }
    
    public function getPostById($id){
        
    }
    
    public function formatPost($post){
        $html = "";
        switch($post['type']){
            case 'photo':
                if(!empty($post['photos'][0]['alt_sizes'])){
                    if($post['photos'][0]['alt_sizes'][0]['width'] > 400){
                        $html .= "<center><img class='image-max' src='{$post['photos'][0]['alt_sizes'][0]['url']}'/></center>";
                    }else
                        $html .= "<center><img style='margin-top: 20px' src='{$post['photos'][0]['alt_sizes'][0]['url']}'/></center>";
                }
                if(!empty($post['caption'])){
                    $html .= "<center>".$post['caption']."</center>";
                }
                break;
            case 'video':
                $html .= "<div class='tumblr-video'><center>".$post['player'][2]['embed_code']."{$post['caption']}</center></div>";
                break;
            case 'text':
                $html .= $post['body'];
                break;
            case 'quote':
                $html .= "<p class='tumblr-quote'>\"".$post['text']."\"</p>";
                $sources = explode("[,(]", $post['source']);
                $html .= "<p>{$post['source']}</p>";
                break;
            case 'link':
                $html .= "<div class='tumblr-link'><center><p><a href='".$post['url']."'>{$post['title']}</a></p></center></div>";
                $html .=$post['description'];
                break;
            case 'audio':
                $html .= "<center style='padding-top:10px; padding-bottom:10px; background-color: #D0D0D0'>".$post['player']."</center>";
                $html .= $post['caption'];
                break;
        }
        return $html;
    }
}
?>
