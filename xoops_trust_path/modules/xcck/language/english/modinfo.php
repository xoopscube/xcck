<?php
/**
 * @file
 * @package xcck
 * @version $Id$
**/

define('_MI_XCCK_INSTALL_ERROR_MODULE_INSTALLED', 'This module is not yet installed.');
define('_MI_XCCK_INSTALL_ERROR_PERM_ADMIN_SET', 'The module admin permission could not be set up successfully.');
define('_MI_XCCK_INSTALL_ERROR_PERM_READ_SET', 'The module read permission could not be set up successfully.');
define('_MI_XCCK_INSTALL_MSG_MODULE_INSTALLED', 'The module "{0}" has been successfully installed.');
define('_MI_XCCK_INSTALL_ERROR_SQL_FILE_NOT_FOUND', 'The SQL file "{0}" is not found.');
define('_MI_XCCK_INSTALL_MSG_DB_SETUP_FINISHED', 'Database setup is completed.');
define('_MI_XCCK_INSTALL_MSG_SQL_SUCCESS', 'SQL success : {0}');
define('_MI_XCCK_INSTALL_MSG_SQL_ERROR', 'SQL error : {0}');
define('_MI_XCCK_INSTALL_MSG_TPL_INSTALLED', 'Template "{0}" has been successfully installed.');
define('_MI_XCCK_INSTALL_ERROR_TPL_INSTALLED', 'Template "{0}" could not be installed.');
define('_MI_XCCK_INSTALL_ERROR_TPL_UNINSTALLED', 'Template "{0}" could not be uninstalled.');
define('_MI_XCCK_INSTALL_MSG_BLOCK_INSTALLED', 'Block "{0}" has been successfully installed.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_COULD_NOT_LINK', 'Block "{0}" could not link to the module.');
define('_MI_XCCK_INSTALL_ERROR_PERM_COULD_NOT_SET', 'Block permission of "{0}" could not be set up successfully.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_PERM_SET', 'Block permission of "{0}" could not be set up successfully.');
define('_MI_XCCK_INSTALL_MSG_BLOCK_TPL_INSTALLED', 'Block template "{0}" has been successfully installed.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_TPL_INSTALLED', 'Block template "{0}" could not be installed.');
define('_MI_XCCK_INSTALL_MSG_BLOCK_UNINSTALLED', 'Block "{0}" has been successfully installed.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_UNINSTALLED', 'Block "{0}" could not uninstalled.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_PERM_DELETE', 'Block permission of "{0}" could not be deleted.');
define('_MI_XCCK_INSTALL_MSG_BLOCK_UPDATED', 'Block "{0}" is successfully updated.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_UPDATED', 'Block "{0}" could not be updated.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_INSTALLED', 'Block "{0}" could not be installed.');
define('_MI_XCCK_INSTALL_MSG_BLOCK_TPL_UNINSTALLED', 'Block template "{0}" has been successfully uninstalled.');
define('_MI_XCCK_INSTALL_MSG_CONFIG_ADDED', 'Config "{0}" is added.');
define('_MI_XCCK_INSTALL_ERROR_CONFIG_ADDED', 'Config "{0}" could not be added.');
define('_MI_XCCK_INSTALL_MSG_CONFIG_DELETED', 'Config "{0}" has been deleted.');
define('_MI_XCCK_INSTALL_ERROR_CONFIG_DELETED', 'Config "{0}" could not be deleted.');
define('_MI_XCCK_INSTALL_MSG_CONFIG_UPDATED', 'Config "{0}" is updated.');
define('_MI_XCCK_INSTALL_ERROR_CONFIG_UPDATED', 'Config "{0}" could not updated.');
define('_MI_XCCK_INSTALL_ERROR_CONFIG_NOT_FOUND', 'Config is not found.');
define('_MI_XCCK_INSTALL_MSG_MODULE_INFORMATION_DELETED', 'Module information is deleted.');
define('_MI_XCCK_INSTALL_ERROR_MODULE_INFORMATION_DELETED', 'Module information could not be deleted.');
define('_MI_XCCK_INSTALL_MSG_TABLE_DOROPPED', 'Table "{0}" is dropped.');
define('_MI_XCCK_INSTALL_ERROR_TABLE_DOROPPED', 'Table "{0}" could not be dropped.');
define('_MI_XCCK_INSTALL_ERROR_BLOCK_TPL_DELETED', 'Block template could not be deleted.<br />{0}');
define('_MI_XCCK_INSTALL_MSG_MODULE_UNINSTALLED', 'Module "{0}" is uninstalled.');
define('_MI_XCCK_INSTALL_ERROR_MODULOE_UNINSTALLED', 'Module "{0}" could not be uninstalled.');
define('_MI_XCCK_INSTALL_MSG_UPDATE_STARTED', 'Module update started.');
define('_MI_XCCK_INSTALL_MSG_UPDATE_FINISHED', 'Module update is finished.');
define('_MI_XCCK_INSTALL_ERROR_UPDATE_FINISHED', 'Module could not be updated.');
define('_MI_XCCK_INSTALL_MSG_MODULE_UPDATED', 'Module "{0}" is updated.');
define('_MI_XCCK_INSTALL_ERROR_MODULE_UPDATED', 'Module "{0}" could not be updated.');
define('_MI_XCCK_INSTALL_ERROR_REQUIRED_LEGACY22', 'This module requires Legacy System Ver2.2 or later.');
define('_MI_XCCK_LANG_XCCK', 'XCCK');
define('_MI_XCCK_DESC_XCCK', 'XOOPSCube Content Creation Kit');
define('_MI_XCCK_LANG_AUTHOR', 'HIKAWA Kilica');
define('_MI_XCCK_LANG_CREDITS', 'HIKAWA Kilica, updated and maintained by Nuno Luciano');

/* template */
define('_MI_XCCK_TPL_DEFINITION_LIST', 'DEFINITION LIST');
define('_MI_XCCK_TPL_DEFINITION_EDIT', 'DEFINITION EDIT');
define('_MI_XCCK_TPL_DEFINITION_DELETE', 'DEFINITION DELETE');
define('_MI_XCCK_TPL_DEFINITION_VIEW', 'DEFINITION VIEW');
define('_MI_XCCK_TPL_PAGE_LIST', 'PAGE LIST');
define('_MI_XCCK_TPL_PAGE_EDIT', 'PAGE EDIT');

define('_MI_XCCK_TPL_PAGE_DELETE', 'PAGE DELETE');
define('_MI_XCCK_TPL_PAGE_INC', 'Data Provider');
define('_MI_XCCK_TPL_PAGE_VIEW', 'PAGE VIEW');
define('_MI_XCCK_TPL_SUBTABLE_VIEW', 'SUBTABLE PAGE VIEW');

define('_MI_XCCK_LANG_DEFINITION_LIST', 'DEFINITION LIST');
define('_MI_XCCK_KEYWORD_DEFINITION_LIST', 'DEFINITION LIST');
define('_MI_XCCK_LANG_ADD_A_NEW_DEFINITION', 'Add a new definition');
define('_MI_XCCK_KEYWORD_DEFINITION_CREATE', 'Create a definition');

/* module config */
define('_MI_XCCK_LANG_ACCESS_CONTROLLER', 'Access Controller Module');
define('_MI_XCCK_DESC_ACCESS_CONTROLLER', 'Select the category or group module to manage Edit and View permissions.');
define('_MI_XCCK_LANG_HIERARCHICAL', 'Enable a hierarchical page structure');
define('_MI_XCCK_DESC_HIERARCHICAL', 'Parent pages display their own content and also contain subpages (children), acting as organizational nodes.');
define('_MI_XCCK_LANG_AUTH_TYPE', 'Authentication Type List');
define('_MI_XCCK_DESC_AUTH_TYPE', 'Set Authentication Type separeted by delimiter pipe "|".<br>
Default Value is \'viewer|poster|reviewer|manager\'.<ul><li>viewer: permission for viewing published page</li><li>poster: permission for posting page</li><li>reviewer: permission for reviewing page before published</li><li>manager: permission for edit, delete other user\'s page</li></ul>');
define('_MI_XCCK_LANG_CSS_FILE', 'CSS file path');
define('_MI_XCCK_LANG_PUBLISH', 'Select the content publishing workflow');
define('_MI_XCCK_DESC_PUBLISH', '<ul><li>none:publish automatically.</li><li>linear:need approval in turns. This need some Legacy_Workflow module like leprogress</li><li>Rating:need rating from number of people above "Threshold".</li></ul>');
define('_MI_XCCK_LANG_DEFAULT_ACTION', 'Set the Top page name');
define('_MI_XCCK_DESC_DEFAULT_ACTION', 'The Page Name appears on your Module Top page Action Name');
define('_MI_XCCK_LANG_DEFAULT_QUERY', 'Default Query Parameters');
define('_MI_XCCK_DESC_DEFAULT_QUERY', 'Separate each query with delimiter pipe "|".<br>Example: category_id=1|status=9');
define('_MI_XCCK_LANG_FORWARD_ACTION', 'Set redirection after editing content');
define('_MI_XCCK_LANG_PREVIEW', 'PREVIEW');
define('_MI_XCCK_LANG_THRESHOLD', 'Threshold for publishing');
define('_MI_XCCK_TPL_CHILD_VIEW', 'Show subdata');
define('_MI_XCCK_LANG_MAIN_TABLE', 'Main Table');
define('_MI_XCCK_DESC_MAIN_TABLE', 'Set the main xCCK table directory name to use this xCCK as a sub-table');
define('_MI_XCCK_LANG_SUBTABLE_AUTH', 'Permission to edit subtable');
define('_MI_XCCK_DESC_SUBTABLE_AUTH', 'Permission to edit subtable xCCK');
define('_MI_XCCK_LANG_SUBTABLE_PARENT_AUTH', 'Only the parent page creator has sub-table editing privileges?');
define('_MI_XCCK_DESC_SUBTABLE_PARENT_AUTH', 'This item is set in the module on the sub-table side');
define('_MI_XCCK_OPTION_SUBTABLE_PARENT_ONLY', 'Parent page author only');
define('_MI_XCCK_OPTION_SUBTABLE_ALL_POSTER', 'Anyone with permission to post');
define('_MI_XCCK_OPTION_SUBTABLE_PARENT_IS_MANAGER', 'Anyone with permission to post. Parent page author has administrative rights');
define('_MI_XCCK_LANG_IMAGES', 'List of attached Images');
define('_MI_XCCK_DESC_IMAGES', 'Define one image key name per line. Ensure each name is unique and does not duplicate other form field names. 
You can also add a display title for each image by separating the key name and title with a pipe "|".<br>
Example:<br>img1<br>img2|Box Image<br>item_image|Item Image<br><strong>Requires a Legacy_Image module</strong>, for example, "leimg".</p>');
define('_MI_XCCK_LANG_LIST_ORDER', 'Select the display method for the list.');
define('_MI_XCCK_DESC_LIST_ORDER', 'The default order displays a flat list<br>
Display by category uses the template "{dirname}_category_list.html"<br>
NOTE: display contents like a photo album requires the module le_image!');
define('_MI_XCCK_LANG_ORDER_FLAT', 'Display contents by default order');
define('_MI_XCCK_LANG_ORDER_CATEGORIZED', 'Display contents by category');
define('_MI_XCCK_LANG_ORDER_ALBUM', 'Display like photo album');
define('_MI_XCCK_LANG_DEFAULT_ORDER', 'Default Order');
define('_MI_XCCK_DESC_DEFAULT_ORDER', 'Set the default field number for ordering pages.<br>
See the "Default Order" admin page for information about the field number.<br>
Example: "8" weight ascending order. "-10" posttime descending order.');
define('_MI_XCCK_LANG_WEIGHT_ORDER', 'Order by Weight');
define('_MI_XCCK_LANG_POSTTIME_ORDER', 'Order descending by post datetime');
define('_MI_XCCK_LANG_TAG_DIRANME', 'Tag Module');
define('_MI_XCCK_DESC_TAG_DIRANME', 'Select the the module to use for Tags');
define('_MI_XCCK_LANG_COMMENT_DIRNAME', 'Comment Module');
define('_MI_XCCK_DESC_COMMENT_DIRNAME', 'Select the dirname of the module to use for comments.');
define('_MI_XCCK_LANG_SINGLEPOST', 'Enable single post');
define('_MI_XCCK_DESC_SINGLEPOST', 'Yes – allows users to submit only once per item. If this module is installed as a sub-table, users can post only once for each parent data entry.');
define('_MI_XCCK_LANG_DESCRIPTION', 'Description of this module');
define('_MI_XCCK_DESC_DESCRIPTION', 'Enter a description about this module to be displayed on the top page. HTML tags are permitted for formatting.');
define('_MI_XCCK_LANG_USE_MAP', 'Display Map');
define('_MI_XCCK_DESC_USE_MAP', 'Set the latitude and longitude for the data.');
define('_MI_XCCK_LANG_REVISION', 'Enable Revision management');
define('_MI_XCCK_LANG_SETUP_FIELD', 'Fields set up from URL parameters');
define('_MI_XCCK_DESC_SETUP_FIELD', 'Specify the fields, separated by commas, to be set when a value is provided in the URL parameter.');
define('_MI_XCCK_LANG_USE_ACTIVITY', 'Output RSS');

/* Sub Menu */
define('_MI_XCCK_LANG_SUB_ADD_A_PAGE', 'Add a Page');
define('_MI_XCCK_LANG_SUB_DEFINITION_LIST', 'Definition List');
define('_MI_XCCK_LANG_SUB_ADD_A_DEFINITION', 'Add a definition');

/* Admin Menu */
define('_MI_XCCK_LANG_SETTING_OUTPUT', 'Export Settings');
define('_MI_XCCK_KEYWORD_SETTING_OUTPUT', 'Export xcck module settings');
define('_MI_XCCK_LANG_TEMPLATE_OUTPUT', 'View Template');
define('_MI_XCCK_KEYWORD_TEMPLATE_OUTPUT', 'View Template');
define('_MI_XCCK_LANG_ORDER_SHOW', 'Default Order');

/* Block */
define('_MI_XCCK_BLOCK_NAME_LIST', 'List');
define('_MI_XCCK_BLOCK_DESC_LIST', 'List');
define('_MI_XCCK_BLOCK_NAME_CATEGORY', 'Category');
define('_MI_XCCK_BLOCK_DESC_CATEGORY', 'Display the number of pages for each category');
