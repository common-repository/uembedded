<?php
/*
* Plugin Name: uEmbedded
* Plugin URI: http://wordpress.org/extend/plugins/uembedded/
* Description: You can embedded Youtube video on your post. Simple and Easy.
* Version: 1.0
* Author: Raju Ahmmed
* Author URI: http://www.rajuahmmed.info
* License: GPLv2 or later
 */

add_shortcode('uEmbedded', 'uEmbedded_call');

function uEmbedded_call($atts)
{
    
    //Default width
    if(!isset($atts['width']))
    {
        $atts['width'] = 560;
    }
    
    //Default height
    if(!isset($atts['height']))
    {
        $atts['height'] = 315;
    }
    
    //Default Show suggested videos mode
    if(!isset($atts['ssv']))
    {
        $ssv = false;
    }
    else
    {
        $ssv = true;
    }
    
    if($ssv)
    {
        $ssv_false = "?rel=0";
    }
    
    
    //Default privacy-enhanced mode
    if(!isset($atts['pemode']))
    {
        $pemode_status = false;
    }
    else
    {
        $pemode_status = true;
    }
    
    if($pemode_status)
    {
        $pemode_en = "youtube-nocookie";
    }  
    else 
    {
        $pemode_en = "youtube";
    }
    
    //Return Value
    $video = "<iframe width=".$atts['width']." height=".$atts['height']." src='http://www.$pemode_en.com/embed/".$atts['vid']."$ssv_false' frameborder='0' allowfullscreen></iframe>";
    return $video;
}
?>