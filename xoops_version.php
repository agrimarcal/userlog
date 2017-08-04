<?php
/*
 You may not change or alter any portion of this comment or credits
 of supporting developers from this source code or any supporting source code
 which is considered copyrighted (c) material of the original comment or credit authors.

 This program is distributed in the hope that it will be useful,
 but WITHOUT ANY WARRANTY; without even the implied warranty of
 MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
*/
/**
 *  userlog module
 *
 * @copyright       XOOPS Project (https://xoops.org)
 * @license         GNU GPL 2 (http://www.gnu.org/licenses/old-licenses/gpl-2.0.html)
 * @package         userlog
 * @since           1
 * @author          irmtfan (irmtfan@yahoo.com)
 * @author          XOOPS Project <www.xoops.org> <www.xoops.ir>
 */
defined('XOOPS_ROOT_PATH') || exit('XOOPS root path not defined');

$moduleDirName = basename(__DIR__);

// ------------------- Informations ------------------- //
$modversion = array(
    'version'             => 1.17,
    'module_status'       => 'ALPHA 2',
    'release_date'        => '2017/07/20', //yyyy/mm/dd
    'name'                => _MI_USERLOG_NAME,
    'description'         => _MI_USERLOG_DSC,
    'official'            => 0, //1 indicates supported by XOOPS Dev Team, 0 means 3rd party supported
    'author'              => 'xoops.org (irmtfan)',
    'nickname'            => 'irmtfan',
    'author_mail'         => 'author-email',
    'author_website_url'  => 'https://xoops.org',
    'author_website_name' => 'XOOPS',
    'credits'             => 'XOOPS Project Team, trabis, irmtfan, mamba, tatane, cesagonchu, zyspec, blackrx, timgno, chefry',
    'license'             => 'GPL 2.0 or later',
    'license_url'         => 'www.gnu.org/licenses/gpl-2.0.html/',
    'help'                => 'page=help',
    //
    'release_info'        => 'Changelog',
    'release_file'        => XOOPS_URL . '/modules/{$moduleDirName}/docs/changelog file',
    //
    'manual'              => 'link to manual file',
    'manual_file'         => XOOPS_URL . '/modules/{$moduleDirName}/docs/install.txt',
    'min_php'             => '5.5',
    'min_xoops'           => '2.5.9',
    'min_admin'           => '1.2',
    'min_db'              => array('mysql' => '5.5'),
    // images
    'image'               => 'assets/images/logoModule.png',
    'iconsmall'           => 'assets/images/iconsmall.png',
    'iconbig'             => 'assets/images/iconbig.png',
    'dirname'             => "{$moduleDirName}",
    // Local path icons
    'modicons16'          => 'assets/images/icons/16',
    'modicons32'          => 'assets/images/icons/32',
    //About
    //    'release'             => '2015-04-04',
    'demo_site_url'       => 'https://xoops.org',
    'demo_site_name'      => 'XOOPS Demo Site',
    'support_url'         => 'https://xoops.org/modules/newbb/viewforum.php?forum=28/',
    'support_name'        => 'Support Forum',
    'module_website_url'  => 'www.xoops.org',
    'module_website_name' => 'XOOPS Project',
    // Admin system menu
    'system_menu'         => 1,
    // Admin menu
    'hasAdmin'            => 1,
    'adminindex'          => 'admin/index.php',
    'adminmenu'           => 'admin/menu.php',
    // Main menu
    'hasMain'             => 1,
    //Search & Comments
    //    'hasSearch'           => 1,
    //    'search'              => array(
    //        'file'   => 'include/search.inc.php',
    //        'func'   => 'XXXX_search'),
    //    'hasComments'         => 1,
    //    'comments'              => array(
    //        'pageName'   => 'index.php',
    //        'itemName'   => 'id'),

    // Install/Update
    'onInstall'           => 'include/oninstall.php',
    'onUninstall'         => 'include/onuninstall.php',
    'onUpdate'            => 'include/onupdate.php'

);

// ------------------- Help files ------------------- //
$modversion['helpsection'] = array(
    ['name' => _MI_USERLOG_OVERVIEW, 'link' => 'page=help'],
    ['name' => _MI_USERLOG_DISCLAIMER, 'link' => 'page=disclaimer'],
    ['name' => _MI_USERLOG_LICENSE, 'link' => 'page=license'],
    ['name' => _MI_USERLOG_SUPPORT, 'link' => 'page=support'],
);

// ------------------- Templates ------------------- //

xoops_loadLanguage('admin', $modversion['dirname']);

//$modversion['onUpdate'] = 'include/module.php';
//$modversion['onUninstall'] = 'include/module.php';

//about

$modversion['dirmoduleadmin'] = 'Frameworks/moduleclasses';
$modversion['icons16']        = 'Frameworks/moduleclasses/icons/16';
$modversion['icons32']        = 'Frameworks/moduleclasses/icons/32';

// ------------------- Mysql ------------------- //
$modversion['sqlfile']['mysql'] = 'sql/mysql.sql';

// Tables created by sql file (without prefix!)
$modversion['tables'] = array(
    $moduleDirName . '_log',
    $moduleDirName . '_set',
    $moduleDirName . '_stats'
);

// Search
$modversion['hasSearch'] = 0;

// Admin menu
// Set to 1 if you want to display menu generated by system module
$modversion['system_menu'] = 1;

// Main
$modversion['hasMain'] = 0;

$modversion['hasComments'] = 0;

// Templates - if you don't define 'type' it will be 'module' | '' -> templates
$i                                          = 0;
$modversion['templates'][$i]['file']        = $modversion['dirname'] . '_admin_sets.tpl';
$modversion['templates'][$i]['type']        = 'admin'; // $type = 'blocks' -> templates/blocks , 'admin' -> templates/admin , 'module' | '' -> templates
$modversion['templates'][$i]['description'] = 'list of userlog setting';

++$i;
$modversion['templates'][$i]['file']        = $modversion['dirname'] . '_admin_logs.tpl';
$modversion['templates'][$i]['type']        = 'admin'; // $type = 'blocks' -> templates/blocks , 'admin' -> templates/admin , 'module' | '' -> templates
$modversion['templates'][$i]['description'] = 'list of userlog logs';

++$i;
$modversion['templates'][$i]['file']        = $modversion['dirname'] . '_admin_file.tpl';
$modversion['templates'][$i]['type']        = 'admin'; // $type = 'blocks' -> templates/blocks , 'admin' -> templates/admin , 'module' | '' -> templates
$modversion['templates'][$i]['description'] = 'File manager';

++$i;
$modversion['templates'][$i]['file']        = $modversion['dirname'] . '_admin_stats.tpl';
$modversion['templates'][$i]['type']        = 'admin'; // $type = 'blocks' -> templates/blocks , 'admin' -> templates/admin , 'module' | '' -> templates
$modversion['templates'][$i]['description'] = 'Logs Statistics';

++$i;
$modversion['templates'][$i]['file']        = $modversion['dirname'] . '_admin_stats_moduleadmin.tpl';
$modversion['templates'][$i]['type']        = 'admin'; // $type = 'blocks' -> templates/blocks , 'admin' -> templates/admin , 'module' | '' -> templates
$modversion['templates'][$i]['description'] = 'module admin history';

// Admin things
$modversion['hasAdmin']   = 1;
$modversion['adminindex'] = 'admin/index.php';
$modversion['adminmenu']  = 'admin/menu.php';

// blocks
$i = 0;
// options[0] - number of items to show in block. the default is 10
// options[1] - items to select in Where claus
// options[2] - Time period - default: 1 day
// options[3] - Uid in WHERE claus: select some users to only count views by them -1 -> all (by default)
// options[4] - Gid in WHERE claus: select some groups to only count views by them 0 -> all (by default)
// options[5] - Sort - views, module dirname, module name, module views default: views
// options[6] - Order - DESC, ASC default: DESC
$modversion['blocks'][$i]['file']        = 'views.php';
$modversion['blocks'][$i]['name']        = _MI_USERLOG_BLOCK_VIEWS;
$modversion['blocks'][$i]['description'] = _MI_USERLOG_BLOCK_VIEWS_DSC;
$modversion['blocks'][$i]['show_func']   = $modversion['dirname'] . '_views_show';
$modversion['blocks'][$i]['edit_func']   = $modversion['dirname'] . '_views_edit';
$modversion['blocks'][$i]['options']     = '10|0|1|-1|0|count|DESC';
$modversion['blocks'][$i]['template']    = $modversion['dirname'] . '_block_views.tpl';

// options[0] - number of items to show in block. the default is 10
// options[1] - login or register or both radio select
// options[2] - failed or successful or both radio select
// options[3] - inactive or active or both
// options[4] - never login before or login before or both
// options[5] - Order - DESC, ASC default: DESC
++$i;
$modversion['blocks'][$i]['file']        = 'login_reg_history.php';
$modversion['blocks'][$i]['name']        = _AM_USERLOG_LOGIN_REG_HISTORY;
$modversion['blocks'][$i]['description'] = _AM_USERLOG_LOGIN_REG_HISTORY;
$modversion['blocks'][$i]['show_func']   = $modversion['dirname'] . '_login_reg_history_show';
$modversion['blocks'][$i]['edit_func']   = $modversion['dirname'] . '_login_reg_history_edit';
$modversion['blocks'][$i]['options']     = '10|0|0|0|0|DESC';
$modversion['blocks'][$i]['template']    = $modversion['dirname'] . '_block_login_reg_history.tpl';

// options[0] - number of items to show in block. the default is 10
// options[1] - stats_type - referral (default), browser, OS
// options[2] - Sort - stats_link, stats_value (default), time_update
// options[3] - Order - DESC, ASC default: DESC
++$i;
$modversion['blocks'][$i]['file']        = 'stats_type.php';
$modversion['blocks'][$i]['name']        = _AM_USERLOG_STATS_TYPE;
$modversion['blocks'][$i]['description'] = _AM_USERLOG_STATS_TYPE_DSC;
$modversion['blocks'][$i]['show_func']   = $modversion['dirname'] . '_stats_type_show';
$modversion['blocks'][$i]['edit_func']   = $modversion['dirname'] . '_stats_type_edit';
$modversion['blocks'][$i]['options']     = '10|referral|stats_value|DESC';
$modversion['blocks'][$i]['template']    = $modversion['dirname'] . '_block_stats_type.tpl';

// Config categories
$modversion['configcat']['logfile']['name']        = _MI_USERLOG_CONFCAT_LOGFILE;
$modversion['configcat']['logfile']['description'] = _MI_USERLOG_CONFCAT_LOGFILE_DSC;
$modversion['configcat']['format']['name']         = _MI_USERLOG_CONFCAT_FORMAT;
$modversion['configcat']['format']['description']  = _MI_USERLOG_CONFCAT_FORMAT_DSC;
$modversion['configcat']['pagenav']['name']        = _MI_USERLOG_CONFCAT_PAGENAV;
$modversion['configcat']['pagenav']['description'] = _MI_USERLOG_CONFCAT_PAGENAV_DSC;
$modversion['configcat']['logdb']['name']          = _MI_USERLOG_CONFCAT_LOGDB;
$modversion['configcat']['logdb']['description']   = _MI_USERLOG_CONFCAT_LOGDB_DSC;
$modversion['configcat']['prob']['name']           = _MI_USERLOG_CONFCAT_PROB;
$modversion['configcat']['prob']['description']    = _MI_USERLOG_CONFCAT_PROB_DSC;

// Config Settings (only for modules that need config settings generated automatically)
################### Log file ####################
$modversion['log_paths']                 = array(
    'XOOPS_VAR_PATH'    => XOOPS_VAR_PATH,
    'XOOPS_UPLOAD_PATH' => XOOPS_UPLOAD_PATH
);
$i                                       = 0;
$modversion['config'][$i]['name']        = 'status';
$modversion['config'][$i]['title']       = '_MI_USERLOG_STATUS';
$modversion['config'][$i]['description'] = '_MI_USERLOG_STATUS_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array(_MI_USERLOG_ACTIVE => 1, _MI_USERLOG_IDLE => 0);

++$i;
$modversion['config'][$i]['name']        = 'postlog';
$modversion['config'][$i]['title']       = '_MI_USERLOG_POSTLOG';
$modversion['config'][$i]['description'] = '_MI_USERLOG_POSTLOG_DSC';
$modversion['config'][$i]['formtype']    = 'yesno';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = array();

++$i;
$modversion['config'][$i]['name']        = 'logfile';
$modversion['config'][$i]['title']       = '_MI_USERLOG_CONFCAT_LOGFILE_DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'odd';
$modversion['config'][$i]['category']    = 'logfile';

++$i;
$modversion['config'][$i]['name']        = 'maxlogfilesize';
$modversion['config'][$i]['title']       = '_MI_USERLOG_MAXLOGFILESIZE';
$modversion['config'][$i]['description'] = '_MI_USERLOG_MAXLOGFILESIZE_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 1000000; // bytes below 1MB because some servers have limitations
$modversion['config'][$i]['category']    = 'logfile';

++$i;
$modversion['config'][$i]['name']        = 'logfilepath';
$modversion['config'][$i]['title']       = '_MI_USERLOG_LOGFILEPATH';
$modversion['config'][$i]['description'] = '_MI_USERLOG_LOGFILEPATH_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = XOOPS_VAR_PATH;
$modversion['config'][$i]['options']     = $modversion['log_paths'];
$modversion['config'][$i]['category']    = 'logfile';

++$i;
$modversion['config'][$i]['name']        = 'logfilename';
$modversion['config'][$i]['title']       = '_MI_USERLOG_LOGFILENAME';
$modversion['config'][$i]['description'] = '_MI_USERLOG_LOGFILENAME_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'userlognav';
$modversion['config'][$i]['category']    = 'logfile';

++$i;
$modversion['config'][$i]['name']        = 'format';
$modversion['config'][$i]['title']       = '_MI_USERLOG_CONFCAT_FORMAT_DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'even';
$modversion['config'][$i]['category']    = 'format';

++$i;
$modversion['config'][$i]['name']        = 'format_date';
$modversion['config'][$i]['title']       = '_MI_USERLOG_DATEFORMAT';
$modversion['config'][$i]['description'] = '_MI_USERLOG_DATEFORMAT_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'd-M-Y H:i';
$modversion['config'][$i]['category']    = 'format';

++$i;
$modversion['config'][$i]['name']        = 'format_date_history';
$modversion['config'][$i]['title']       = '_MI_USERLOG_DATEFORMAT_HISTORY';
$modversion['config'][$i]['description'] = '_MI_USERLOG_DATEFORMAT_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'elapse';
$modversion['config'][$i]['category']    = 'format';

++$i;
$modversion['config'][$i]['name']        = 'pagenav';
$modversion['config'][$i]['title']       = '_MI_USERLOG_CONFCAT_PAGENAV_DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'odd';
$modversion['config'][$i]['category']    = 'pagenav';

++$i;
$modversion['config'][$i]['name']        = 'sets_perpage';
$modversion['config'][$i]['title']       = '_MI_USERLOG_SETS_PERPAGE';
$modversion['config'][$i]['description'] = '_MI_USERLOG_SETS_PERPAGE_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 20;
$modversion['config'][$i]['category']    = 'pagenav';

++$i;
$modversion['config'][$i]['name']        = 'logs_perpage';
$modversion['config'][$i]['title']       = '_MI_USERLOG_LOGS_PERPAGE';
$modversion['config'][$i]['description'] = '_MI_USERLOG_LOGS_PERPAGE_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 100;
$modversion['config'][$i]['category']    = 'pagenav';

++$i;
$modversion['config'][$i]['name']        = 'engine';
$modversion['config'][$i]['title']       = '_MI_USERLOG_ENGINE';
$modversion['config'][$i]['description'] = '_MI_USERLOG_ENGINE_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 'db';
$modversion['config'][$i]['options']     = array(_AM_USERLOG_ENGINE_DB => 'db', _AM_USERLOG_ENGINE_FILE => 'file');
$modversion['config'][$i]['category']    = 'pagenav';

++$i;
$modversion['config'][$i]['name']        = 'file';
$modversion['config'][$i]['title']       = '_MI_USERLOG_FILE';
$modversion['config'][$i]['description'] = '_MI_USERLOG_FILE_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = '0';
$modversion['config'][$i]['options']     = array(_AM_USERLOG_FILE_WORKING => '0', _AM_USERLOG_STATS_FILEALL => 'all');
$modversion['config'][$i]['category']    = 'pagenav';

++$i;
$modversion['config'][$i]['name']        = 'logdb';
$modversion['config'][$i]['title']       = '_MI_USERLOG_CONFCAT_LOGDB_DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'even';
$modversion['config'][$i]['category']    = 'logdb';

++$i;
$modversion['config'][$i]['name']        = 'maxlogs';
$modversion['config'][$i]['title']       = '_MI_USERLOG_MAXLOGS';
$modversion['config'][$i]['description'] = '_MI_USERLOG_MAXLOGS_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 10000;
$modversion['config'][$i]['category']    = 'logdb';

++$i;
$modversion['config'][$i]['name']        = 'maxlogsperiod';
$modversion['config'][$i]['title']       = '_MI_USERLOG_MAXLOGSPERIOD';
$modversion['config'][$i]['description'] = '_MI_USERLOG_MAXLOGSPERIOD_DSC';
$modversion['config'][$i]['formtype']    = 'textbox';
$modversion['config'][$i]['valuetype']   = 'int';
$modversion['config'][$i]['default']     = 0;
$modversion['config'][$i]['category']    = 'logdb';

++$i;
$modversion['config'][$i]['name']        = 'prob';
$modversion['config'][$i]['title']       = '_MI_USERLOG_CONFCAT_PROB_DSC';
$modversion['config'][$i]['description'] = '';
$modversion['config'][$i]['formtype']    = 'line_break';
$modversion['config'][$i]['valuetype']   = 'textbox';
$modversion['config'][$i]['default']     = 'odd';
$modversion['config'][$i]['category']    = 'prob';

++$i;
$modversion['config'][$i]['name']        = 'probset';
$modversion['config'][$i]['title']       = '_MI_USERLOG_PROBSET';
$modversion['config'][$i]['description'] = '_MI_USERLOG_PROBSET_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 20;
$modversion['config'][$i]['options']     = array_combine(range(1, 100), range(1, 100));
$modversion['config'][$i]['category']    = 'prob';

++$i;
$modversion['config'][$i]['name']        = 'probstats';
$modversion['config'][$i]['title']       = '_MI_USERLOG_PROBSTATS';
$modversion['config'][$i]['description'] = '_MI_USERLOG_PROBSTATS_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 10;
$modversion['config'][$i]['options']     = range(0, 100);
$modversion['config'][$i]['category']    = 'prob';

++$i;
$modversion['config'][$i]['name']        = 'probstatsallhit';
$modversion['config'][$i]['title']       = '_MI_USERLOG_PROBSTATSALLHIT';
$modversion['config'][$i]['description'] = '_MI_USERLOG_PROBSTATSALLHIT_DSC';
$modversion['config'][$i]['formtype']    = 'select';
$modversion['config'][$i]['valuetype']   = 'text';
$modversion['config'][$i]['default']     = 1;
$modversion['config'][$i]['options']     = range(0, 100);
$modversion['config'][$i]['category']    = 'prob';

// START add webmaster permission from file to add additional permission check for all webmasters
global $xoopsOption, $xoopsModule;
// effective only in admin side
if (isset($xoopsOption['pagetype']) && $xoopsOption['pagetype'] === 'admin' && is_object($xoopsModule)) {
    // get dirname
    $dirname = $xoopsModule->getVar('dirname');
    // START if dirname is system
    if ($dirname === 'system' && isset($_REQUEST['fct'])) {
        $hModule = xoops_getHandler('module');
        // if we are in preferences of modules
        if ($_REQUEST['fct'] === 'preferences' && isset($_REQUEST['mod'])) {
            $mod     = (int)$_REQUEST['mod'];
            $module  = $hModule->get($mod);
            $dirname = $module->getVar('dirname');
        }
        // if we are in modules admin - can be done with onuninstall and onupdate???
        if ($_REQUEST['fct'] === 'modulesadmin' && isset($_REQUEST['module'])) {
            $dirname = $_REQUEST['module'];
        }
        // if we are in maintenance - now all modules - how to do it for only one module?
        if ($_REQUEST['fct'] === 'maintenance') {
            $dump_modules = isset($_REQUEST['dump_modules']) ? $_REQUEST['dump_modules'] : false;
            $dump_tables  = isset($_REQUEST['dump_tables']) ? $_REQUEST['dump_tables'] : false;
            if ($dump_tables === true || $dump_modules === true) {
                $dirname = $modversion['dirname'];
            }
        }
    }
    // END if dirname is system

    // now check permission from file
    if ($dirname == $modversion['dirname']) {
        if (file_exists($permFile = XOOPS_ROOT_PATH . '/modules/' . $modversion['dirname'] . '/admin/addon/perm.php')) {
            $perm = include $permFile;
            if (count($perm['super']['uid']) > 0 || count($perm['super']['group']) > 0) {
                global $xoopsUser;
                if (is_object($xoopsUser) && !in_array($xoopsUser->getVar('uid'), $perm['super']['uid'])
                    && count(array_intersect($xoopsUser->getGroups(), $perm['super']['group'])) == 0) {
                    $modversion['hasAdmin']    = 0;
                    $modversion['system_menu'] = 0;
                    $modversion['tables']      = null;
                    redirect_header(XOOPS_URL . '/modules/system/help.php?mid=' . (!empty($mod) ? $mod : $xoopsModule->getVar('mid', 's')) . '&amp;page=help', 1, sprintf(_MI_USERLOG_WEBMASTER_NOPERM, implode(',', $perm['super']['uid']), implode(',', $perm['super']['group'])));
                }
            }
        }
    }
}
// END add webmaster permission from file to add additional permission check for all webmasters
