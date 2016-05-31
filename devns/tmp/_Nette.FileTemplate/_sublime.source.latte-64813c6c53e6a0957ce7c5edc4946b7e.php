<?php //netteCache[01]000368a:2:{s:4:"time";s:21:"0.31353600 1464682601";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:54:"F:\CMS\pear\data\ApiGen\templates\sublime\source.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\source.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '5us15ozwki')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbd520f12d29_title')) { function _lbd520f12d29_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>File <?php echo Nette\Templating\Helpers::escapeHtml($fileName, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lbcb7bf0f870_content')) { function _lbcb7bf0f870_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><pre><code><?php echo $template->replaceRE($template->sourceAnchors($source), '~<span class="line">(\\s*(\\d+):\\s*)</span>([^\\n]*\\n)?~', '<span id="$2" class="l"><a class="l" href="#$2">$1</a>$3</span>') ?></code></pre>
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