<?php

/**
 * Collapsed Topics Information
 *
 * A topic based format that solves the issue of the 'Scroll of Death' when a course has many topics. All topics
 * except zero have a toggle that displays that topic. One or more topics can be displayed at any given time.
 * Toggles are persistent on a per browser session per course basis but can be made to persist longer by a small
 * code change. Full installation instructions, code adaptions and credits are included in the 'Readme.txt' file.
 *
 * @package    course/format
 * @subpackage topcoll
 * @version    See the value of '$plugin->version' in version.php.
 * @copyright  &copy; 2009-onwards G J Barnard in respect to modifications of standard topics format.
 * @author     G J Barnard - gjbarnard at gmail dot com and {@link http://moodle.org/user/profile.php?id=442195}
 * @link       http://docs.moodle.org/en/Collapsed_Topics_course_format
 * @license    http://www.gnu.org/copyleft/gpl.html GNU Public License
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.

 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.

 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

// Need PHP 5.3+ for this syntax.
class CollapsedTopicsDefaults {
// Course display default, can be either one of:
// COURSE_DISPLAY_SINGLEPAGE or - All sections on one page.
// COURSE_DISPLAY_MULTIPAGE     - One section per page.
// as defined in moodlelib.php.

    const defaultcoursedisplay = COURSE_DISPLAY_SINGLEPAGE;

// Layout configuration.
// Here you can see what numbers in the array represent what layout for setting the default value below.
// 1 => Default.
// 2 => No 'Topic x' / 'Week x' / 'Day x'.
// 3 => No section number.
// 4 => No 'Topic x' / 'Week x' / 'Day x' and no section number.
// 5 => No 'Toggle' word.
// 6 => No 'Toggle' word and no 'Topic x' / 'Week x' / 'Day x'.
// 7 => No 'Toggle' word, no 'Topic x' / 'Week x' / 'Day x' and no section number.
// Default layout to use - used when a new Collapsed Topics course is created or an old one is accessed for the first time after installing this functionality introduced in CONTRIB-3378.
    const defaultlayoutelement = 1;

// Structure configuration.
// Here so you can see what numbers in the array represent what structure for setting the default value below.
// 1 => Topic
// 2 => Week   
// 3 => Latest Week First 
// 4 => Current Topic First
// 5 => Day
// Default structure to use - used when a new Collapsed Topics course is created or an old one is accessed for the first time after installing this functionality introduced in CONTRIB-3378.
    const defaultlayoutstructure = 1;

// Default number of columns between 1 and 4.
    const defaultlayoutcolumns = 1;

// Toggle colours per course - CONTRIB-3529.
// Default toggle foreground colour in hexidecimal RGB without preceeding '#'.
    const defaulttgfgcolour = '000000';

// Default toggle background colour in hexidecimal RGB without preceeding '#'.
    const defaulttgbgcolour = 'e2e2f2';

// Default toggle background hover colour in hexidecimal RGB without preceeding '#'.
    const defaulttgbghvrcolour = 'eeeeff';

// Toggle persistence - 1 = on, 0 = off.  You may wish to disable for an AJAX performance increase.
// Note: If turning persistence off remove any rows containing 'topcoll_toggle_x' in the 'name' field
//       of the 'user_preferences' table in the database.  Where the 'x' in 'topcoll_toggle_x' will be
//       a course id.
    const togglepersistence = 1;

    // Toggle text alignment.
    // 1 = left, 2 = center and 3 = right - done this way to avoid typos.
    const defaulttogglealignment = 2;
}

?>