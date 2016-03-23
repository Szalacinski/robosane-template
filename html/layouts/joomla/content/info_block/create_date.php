<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.skiboynet
 *
 * @copyright   Copyright (C) Ben Klein
 * @license     GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

?>
                        <dd class="create">
                                        <span class="icon-calendar"></span>
                                        <?php echo JText::sprintf('COM_CONTENT_CREATED_DATE_ON', JHtml::_('date', $displayData['item']->created, JText::_('DATE_FORMAT_LC3'))); ?>
                        </dd>
