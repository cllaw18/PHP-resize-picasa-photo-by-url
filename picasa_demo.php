<html>
<head>
    <title>Picasa resize image by changing url - Soyo Solution</title>
</head>
<body>
<body>
<h1>Demo Message</h1>
<?php 
/*
 * Xenia Law
 * PHP-resize-picasa-photo-by-url
 * http://tool.soyosolution.com/php-resize-picasa-photo-by-url/index.php
*/

$url = 'https://lh3.googleusercontent.com/-0xxGDL4nB5k/U6ORIvopgsI/AAAAAAAABJY/5VXqVws8a-4/s512/computer.png';
show_original_segments($url);
echo "<br />";
echo "newurl : ".resize_image($url, '200')."<br /><br />";
?>
<h1>Demo Image</h1>
Original image:<br />
<img src="<?php echo $url; ?>">
<br /><br />
Resize image:<br />
<img src="<?php echo resize_image($url, '200');?>">

<?php
/*
 ### FUNCTION PART ### 
*/

function show_original_segments($url){
    //Get Segments
    $path = parse_url($url, PHP_URL_PATH);
    $segments = explode('/', rtrim($path, '/'));
    //Get URL Protocol and Domain 
    $parsed_url = parse_url($url);
    $domain = $parsed_url['scheme']."://".$parsed_url['host'];

    echo 'Full Path: '.$url.'<br />';
    echo 'Demain: '.$domain.'<br />';
    echo 'Segment 1: '.$segments[1].'<br />';
    echo 'Segment 2: '.$segments[2].'<br />';
    echo 'Segment 3: '.$segments[3].'<br />';
    echo 'Segment 4: '.$segments[4].'<br />';
    echo 'Segment 5: '.$segments[5].'<br />';
    echo 'Segment 6: '.$segments[6].'<br />';
    echo 'Last Segment: '.end($segments).'<br />';
}//EOF show_original_segments($url)

function resize_image($url, $imgsize){
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
}//EOF resize_image($url)*/
?>
