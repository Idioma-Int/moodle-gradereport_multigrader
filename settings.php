<?php
// This file is part of the Multi Course Grader report for Moodle by Barry Oosthuizen http://elearningstudio.co.uk
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Defines site config settings for the multi grader report
 *
 * @package   gradereport_multigrader
 * @copyright 2012 onwards Barry Oosthuizen http://elearningstudio.co.uk
 * @author    Barry Oosthuizen
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    /// Add settings for this module to the $settings object (it's already defined)
    $settings->add(new admin_setting_configtext('grade_multigrader_studentsperpage', get_string('studentsperpage', 'grades'),
                                            get_string('studentsperpage_help', 'grades'), 1000));

    $settings->add(new admin_setting_configcheckbox('grade_multigrader_showuserimage', get_string('showuserimage', 'grades'),
                                                get_string('showuserimage_help', 'grades'), 0));
}
