PHP-resize-picasa-photo-by-url
==============================
Introduction
------------------
Resize picasa’s photo by url: including a php file and a Codenigter library

**File included**
               <ul>
                <li>Codenigter   (This folder included the library for codenigter)
                    <ol>
                    <li>Application
                        <ul><li>Controllers
                            <ul><li>picasa.php</li></ul></li></ul>
                        <ul><li>Libraries
                            <ul><li>picasa_resize.php</li></ul></li></ul>
                        <ul><li>Views
                            <ul><li>picasa_demo.php</li></ul></li></ul>
                    </li>
                    </ul>
                <li>picasa_demo.php</li>
                </ol>

+This folder named “Codenigter” included the library for codenigter, you could just copy it to your CI root and run it
+ Picasa_demo.php placing at root including all function, you can copy that to your localhost and run it without any other files. 

How to use
------------------
<h2>For php function: </h2>
You can just copy code in picasa_demo.php, and then call the function resize_image() to resize the images

<pre>Function resize_image($url, $imgsize) {}</pre>

$url      = url of your image you uploaded to picasa.
$imgsize  = new size of the image you want.

For an example, you use https://lh3.googleusercontent.com/-0xxGDL4nB5k/U6ORIvopgsI/AAAAAAAABJY/5VXqVws8a-4/s30/computer.png as the first paras

Code:
<pre><?php 
$url = “https://lh3.googleusercontent.com/-0xxGDL4nB5k/U6ORIvopgsI/AAAAAAAABJY/5VXqVws8a-4/s30/computer.png”;
Echo “<h3>original Image</h3>”;
echo “<img src='”.$url.”’ alt=’’ />”;
Echo “<h3>Image with new size</h3>”;
echo “<img src='”.resize_image($url, '200').”’ alt=’’ />”;
?>
</pre>

<hr />
<h2>If you are using codenigter</h2>
copy the “picasa_resize.php” to
<pre>
File in github path   : Codenigter/application/libraries/picasa_resize.php 
Your Codenigter path : /application/libraries/picasa_resize.php
</pre>

And then import the Codenigter url helper in your controller:
<pre>$this->load->helper('url'); </pre>

Load the libraries your downloaded:
<pre>$this->load->library('picasa_resize'); </pre>

Pass the parameters to library function:
<pre>
$url = "https://lh3.googleusercontent.com/-0xxGDL4nB5k/U6ORIvopgsI/AAAAAAAABJY/5VXqVws8a-4/s512/computer.png";
        $imgsize = "100";
        $data['oldurl'] = $url;
        $data['newurl'] = $this->picasa_resize->resize_image($url, $imgsize);
</pre>
Or 
<pre>
$this->picasa_resize->resize_image("https://lh4.googleusercontent.com/-dAejSnYrNw8/U6KpRsDbkNI/AAAAAAAAAyo/FetX2d5CN_A/s0/53a2a944b1842.jpg", "400");
</pre>

Show in view:
<pre>
$this->load->view('picasa_demo', $data);
</pre>

Detail and demo
-----------------------
You can visit the demo site:
http://tool.soyosolution.com/php-resize-picasa-photo-by-url/


