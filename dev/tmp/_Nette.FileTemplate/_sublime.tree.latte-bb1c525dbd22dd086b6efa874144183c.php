<?php //netteCache[01]000366a:2:{s:4:"time";s:21:"0.12524000 1464596165";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"F:\CMS\pear\data\ApiGen\templates\sublime\tree.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\tree.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'b3aajpwwf3')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lbc7d6aa0734_title')) { function _lbc7d6aa0734_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Tree<?php
}}

//
// block tree
//
if (!function_exists($_l->blocks['tree'][] = '_lbf1bb6416c5_tree')) { function _lbf1bb6416c5_tree($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div class="tree">
	<ul>
<?php $level = -1 ;foreach ($tree as $reflectionName => $reflection): if ($level === $tree->getDepth()) { ?>
				</li>
<?php } elseif ($level > $tree->getDepth()) { ?>
				<?php echo $template->repeat('</ul></li>', $level - $tree->getDepth()) ?>

<?php } elseif (-1 !== $level) { ?>
				<ul>
<?php } ?>

			<li<?php if ($_l->tmp = array_filter(array(!$tree->hasSibling() ? 'last' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><div class="<?php if ($tree->hasSibling()) { ?>not<?php } ?>last"><?php if ($_l->ifs[] = ($reflection->documented)) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($reflectionName))) ?>
"><?php } ?>
<span<?php if ($_l->tmp = array_filter(array($reflection->deprecated ? 'deprecated' : NULL, !$reflection->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($reflectionName, ENT_NOQUOTES) ?>
</span><?php if (array_pop($_l->ifs)) { ?></a>
<?php } $interfaces = $reflection->ownInterfaces ?>
			<?php if ($interfaces) { ?> implements <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($interfaces) as $interface) { ?>

<?php if ($_l->ifs[] = ($interface->documented)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($interface))) ?>
"><?php } ?>
<span<?php if ($_l->tmp = array_filter(array($interface->deprecated ? 'deprecated' : NULL, !$interface->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($interface->name, ENT_NOQUOTES) ?>
</span><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

			<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;} ?>

<?php $traits = $reflection->ownTraits ?>
			<?php if ($traits) { if ($interfaces) { ?><br><span class="padding"></span><?php } ?>
 uses <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($traits) as $trait) { ?>

<?php if ($_l->ifs[] = ($trait->documented)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($trait))) ?>
"><?php } ?>
<span<?php if ($_l->tmp = array_filter(array($trait->deprecated ? 'deprecated' : NULL, !$trait->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($trait->name, ENT_NOQUOTES) ?></span><?php if (array_pop($_l->ifs)) { ?>
</a><?php } if (!$iterator->isLast()) { ?>, <?php } ?>

			<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;} ?>

			</div>

<?php $level = $tree->getDepth() ;endforeach ?>
		</li>
		<?php echo $template->repeat('</ul></li>', $level) ?>

	</ul>
</div>
<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb5221aa443a_content')) { function _lb5221aa443a_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>

<?php if ($classTree->valid()) { ?>
		<h3>Classes</h3>
<?php call_user_func(reset($_l->blocks['tree']), $_l, array('tree' => $classTree) + get_defined_vars()) ;} ?>

<?php if ($interfaceTree->valid()) { ?>
		<h3>Interfaces</h3>
<?php call_user_func(reset($_l->blocks['tree']), $_l, array('tree' => $interfaceTree) + get_defined_vars()) ;} ?>

<?php if ($traitTree->valid()) { ?>
		<h3>Traits</h3>
<?php call_user_func(reset($_l->blocks['tree']), $_l, array('tree' => $traitTree) + get_defined_vars()) ;} ?>

<?php if ($exceptionTree->valid()) { ?>
		<h3>Exceptions</h3>
<?php call_user_func(reset($_l->blocks['tree']), $_l, array('tree' => $exceptionTree) + get_defined_vars()) ;} ?>
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
 $active = 'tree' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>



<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 