<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class picasa_resize {

    public function __construct(){
    }
    /*
    You can remove the function show_original_segments($url) since it's for display demo information.
    */
    
    public function show_original_segments($url){
        //Get Segments
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', rtrim($path, '/'));
        //Get URL Protocol and Domain 
        $parsed_url = parse_url($url);
        $domain = $parsed_url['scheme']."://".$parsed_url['host'];

        echo 'Full Path: '.$url.'<br /><br />';
        echo 'Demain: '.$domain.'<br />';
        echo 'Segment 1: '.$segments[1].'<br />';
        echo 'Segment 2: '.$segments[2].'<br />';
        echo 'Segment 3: '.$segments[3].'<br />';
        echo 'Segment 4: '.$segments[4].'<br />';
        echo 'Segment 5: '.$segments[5].'<br />';
        echo 'Segment 6: '.$segments[6].'<br />';
        echo 'Last Segment: '.end($segments).'<br />';
    }//EOF show_original_segments($url)

    public function resize_image($url, $imgsize){
        //inital value
        $newsize = "s".$imgsize;
        $newurl  ="";
        //Get Segments
        $path = parse_url($url, PHP_URL_PATH);
        $segments = explode('/', rtrim($path, '/'));
        //Get URL Protocol and Domain 
        $parsed_url = parse_url($url);
        $domain  = $parsed_url['scheme']."://".$parsed_url['host'];
        
        $newurl_segments = array(
                           $domain."/",
                           $segments[1]."/",
                           $segments[2]."/",
                           $segments[3]."/",
                           $segments[4]."/",
                           $newsize."/",//change this value
                           $segments[6]
        );
        $newurl_segments_count = count($newurl_segments);
        for($i=0; $i<$newurl_segments_count ; $i++){
            $newurl = $newurl.$newurl_segments[$i];
        }
        return $newurl;
    }//EOF resize_image($url)
    
}

/* End of file picasa_resize.php */
/* Location: ./application/libraries/picasa_resize.php */
