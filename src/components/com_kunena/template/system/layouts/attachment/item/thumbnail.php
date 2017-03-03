<?php
/**
 * Kunena Component
 * @package         Kunena.Template.Crypsis
 * @subpackage      BBCode
 *
 * @copyright       Copyright (C) 2008 - 2017 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();

// @var KunenaAttachment $attachment

$attachment = $this->attachment;

$config = KunenaConfig::getInstance();

$attributesLink = $attachment->isImage() && $config->lightbox ? ' rel="lightbox[thumb' . $attachment->mesid . ']"' : '';
$attributesImg  = ' style="max-height: ' . (int) $config->thumbheight . 'px;"';
?>
<a href="<?php echo $attachment->getUrl(); ?>" title="<?php echo $attachment->getShortName(0, 7); ?>"<?php echo $attributesLink; ?>>
	<?php
	if ($attachment->isImage())
		:
		?>
		<img src="<?php echo $attachment->getUrl(true); ?>"<?php echo $attributesImg; ?> alt="<?php echo $attachment->getFilename(); ?>"/>
	<?php endif; ?>
</a>
