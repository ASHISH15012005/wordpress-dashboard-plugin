<?php
/*
Plugin Name: Dashboard Plugin
Description: A custom plugin to show a dashboard message.
Version: 1.0
Author: Ashish Kodumuru
*/

add_action('admin_notices', function () {
    echo "<div class='notice notice-success'><p>Welcome, Admin! This is a custom dashboard plugin.</p></div>";
});
