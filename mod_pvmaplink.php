<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$language = JFactory::getLanguage();
$language->load('mod_pvmaplink', JPATH_ADMIN);
$showMap = $params->get('showmap');
$document = &JFactory::getDocument();
$document->addCustomTag('<script src="/modules/mod_pvmaplink/js/maplink.js" async defer></script>');
?>
<style>
.pac-container, .pac-item {
    width: inherit !important;
}
<?php
if ($showMap) :
?>
#map-canvas {
    margin-top: .25em;
    margin-bottom: .25em;
    width: 100%;
    height: 100px;
}
<?php
endif;
?>
</style>
<form action="/index.php" method="get" id="josForm" name="josForm" class="form-validate">
    <input type="text" id="address" name="address" width="23em" value="" class="inputbox" placeholder="<?=JText::_('ADDRESS PLACEHOLDER');?>" />
    <input type="hidden" name="option" value="com_voterapp" />
    <input type="hidden" name="tmpl" value="component" />
<?php
if ($showMap) :
?>
    <div id="map-canvas"></div>
<?php
endif;
?>
</form>
