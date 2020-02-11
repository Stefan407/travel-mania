<?php

// Copyright (c), Milos Stojanovic

/*
WP Custom HTML Pages is free software: you can redistribute it and/or modify it 
under the terms of the GNU General Public License as published by the Free Software Foundation, 
either version 2 of the License, or any later version.

WP Custom HTML Pages is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; 
without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with WP Custom HTML Pages. 
If not, see https://www.gnu.org/licenses/gpl-2.0.html .
*/

// if uninstall.php is not called by WordPress
if (!defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

if(get_option('wpchtmlp_opt_remove_table_on_uninstall')) {
    // drop a database table
    global $wpdb;
    $table_name = $wpdb->prefix . 'wpchtmlp_pages';
    $wpdb->query("DROP TABLE IF EXISTS ".$table_name);

}

    delete_option('wpchtmlp_opt_allow_wp-admin');
    delete_option('wpchtmlp_opt_remove_table_on_uninstall');
