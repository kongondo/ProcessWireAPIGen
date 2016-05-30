<?php //netteCache[01]000365a:2:{s:4:"time";s:21:"0.90822800 1464596164";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:51:"F:\CMS\pear\data\ApiGen\templates\sublime\404.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\404.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'dzywcmw5vc')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb4559cbf297_title')) { function _lb4559cbf297_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Page not found<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb57e5d1fd83_content')) { function _lb57e5d1fd83_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>
	<p>The requested page could not be found.</p>
	<p>You have probably clicked on a link that is outdated and points to a page that does not exist any more or you have made an typing error in the address.</p>
	<p>To continue please try to find requested page in the menu,<?php if ($config->tree) { ?>
 take a look at <a href="tree.html">the tree view</a> of the whole project<?php } ?> or use search field on the top.</p>
</div>
<?php
}}

//
// end of blocks
//

// template extending and snippets support

$_l->extends = '@layout.latte'; $template->_extended = $_extended = TRUE;


if ($_l->extends) {
	ob_start();

} elseif (!empty($_control->snippetMode)) {
	return Nette\Latte\Macros\UIMacros::renderSnippets($_control, $_l, get_defined_vars());
}

//
// main template
//
 $robots = false ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 