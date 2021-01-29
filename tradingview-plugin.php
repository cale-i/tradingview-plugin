<?php
/*
Plugin Name: TradingView-Plugin
Plugin URI: ""
Description: TradingView提供のチャートを表示させるためのプラグイン。
Version: 1.0
Author: "わたなべ"
Author URI: ""
License: GPL2

{Plugin Name} is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.
 
{Plugin Name} is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.
 
You should have received a copy of the GNU General Public License
along with {Plugin Name}. If not, see <http://www.gnu.org/licenses>.
*/

// Make sure we don't expose any info if called directly
if (!function_exists('add_action')) {
    echo 'Hi there!  I\'m just a plugin, not much I can do when called directly.';
    exit;
}

define('PLUGIN_DIR', plugin_dir_path(__FILE__));

require_once(PLUGIN_DIR . 'widget.php');
