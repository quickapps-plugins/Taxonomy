<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since	 2.0.0
 * @author	 Christopher Castro <chris@quickapps.es>
 * @link	 http://www.quickappscms.org
 * @license	 http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */

use Taxonomy\Utility\TaxonomyToolbox;
?>

<?php if ($field->view_mode_settings['label_visibility'] == 'above'): ?>
	<h3 class="field-label"><?php echo $field->label; ?></h3>
	<p><?php echo TaxonomyToolbox::formatter($field, $this); ?></p>
<?php elseif ($field->view_mode_settings['label_visibility'] == 'inline'): ?>
	<p><strong class="field-label"><?php echo $field->label; ?>:</strong> <?php echo TaxonomyToolbox::formatter($field, $this); ?></p>
<?php else: ?>
	<p><?php echo TaxonomyToolbox::formatter($field, $this); ?></p>
<?php endif; ?>