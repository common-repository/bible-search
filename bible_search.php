<?php
/*
Plugin Name: Bible Search
Version: 1.0
Plugin URI: http://ebible.com/developers
Description: The eBible Bible Search plugin let's website and blog owners add the power of eBible.com search to their site. (For Wordpress 1.5+)
Author: eBible.com
Author URI: http://ebible.com
*/

function widget_BibleSearch() {
?>
  <form id="ebible_search" name="ebible_search" style="margin: 5px 0" action="http://www.ebible.com/query" target="_blank">
    <input id="query" name="query" type="text" style="width: 100%" />
    <input name="commit" value="Search eBible" type="submit" />
  </form>

  <div style="font-size: 13px;">
    <p style="margin: 5px 0 10px 0;">
    Enter a verse, passage or keywords <br />
    (<a href="http://www.ebible.com/query?query=John+3%3A16" target="_blank">John 3:16</a>, 
    <a href="http://www.ebible.com/query?query=love+is+patient" target="_blank">love is patient</a>)
    </p>
    <p>Powered by <a href="http://ebible.com">eBible.com</a></p>
  </div>
<?php
}
 
function BibleSearch_init()
{
  register_sidebar_widget(__('Bible Search'), 'widget_BibleSearch');
}
add_action("plugins_loaded", "BibleSearch_init");