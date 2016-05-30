<?php //netteCache[01]000371a:2:{s:4:"time";s:21:"0.14824200 1464596165";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:57:"F:\CMS\pear\data\ApiGen\templates\sublime\namespace.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\namespace.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'd5p2o9a969')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb7d155992f6_title')) { function _lb7d155992f6_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($namespace != 'None') { ?>Namespace <?php echo Nette\Templating\Helpers::escapeHtml($namespace, ENT_NOQUOTES) ;} else { ?>
No namespace<?php } 
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbbad650aba1_content')) { function _lbbad650aba1_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="content" class="namespace">
	<h1><?php if ($namespace != 'None') { ?>Namespace <?php echo $template->namespaceLinks($namespace, false) ;} else { ?>
No namespace<?php } ?></h1>

<?php if ($subnamespaces) { ?>	<table class="summary" id="namespaces">
	<caption>Namespaces summary</caption>
<?php $iterations = 0; foreach ($subnamespaces as $namespace) { ?>	<tr>
		<td class="name"><a href="<?php echo htmlSpecialChars($template->safeurl($template->namespaceUrl($namespace))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($namespace, ENT_NOQUOTES) ?></a></td>
	</tr>
<?php $iterations++; } ?>
	</table>
<?php } ?>

<?php Nette\Latte\Macros\CoreMacros::includeTemplate('@elementlist.latte', $template->getParameters(), $_l->templates['d5p2o9a969'])->render() ?>
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
 $active = 'namespace' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 