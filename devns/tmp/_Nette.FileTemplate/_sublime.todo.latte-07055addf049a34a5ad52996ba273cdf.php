<?php //netteCache[01]000366a:2:{s:4:"time";s:21:"0.50590000 1467706607";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:52:"F:\CMS\pear\data\ApiGen\templates\sublime\todo.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\todo.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, '8huko9s92b')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb32ff31a880_title')) { function _lb32ff31a880_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>Todo<?php
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb9f056664ff_content')) { function _lb9f056664ff_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="content">
	<h1><?php call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars()) ?></h1>


<?php if ($todoClasses) { ?>	<table class="summary" id="classes">
	<caption>Classes summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $todoClasses) + get_defined_vars()) ?>
	</table>
<?php } ?>

<?php if ($todoInterfaces) { ?>	<table class="summary" id="interfaces">
	<caption>Interfaces summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $todoInterfaces) + get_defined_vars()) ?>
	</table>
<?php } ?>

<?php if ($todoTraits) { ?>	<table class="summary" id="traits">
	<caption>Traits summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $todoTraits) + get_defined_vars()) ?>
	</table>
<?php } ?>

<?php if ($todoExceptions) { ?>	<table class="summary" id="exceptions">
	<caption>Exceptions summary</caption>
<?php call_user_func(reset($_l->blocks['classes']), $_l, array('items' => $todoExceptions) + get_defined_vars()) ?>
	</table>
<?php } ?>

<?php if ($todoMethods) { ?>	<table class="summary" id="methods">
	<caption>Methods summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($todoMethods) as $method) { ?>
	<tr>
<?php $count = count($method->annotations['todo']) ?>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($method->declaringClassName))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($method->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><code><a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($method))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ?>()</a></code></td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($method->annotations['todo']) as $description) { ?>
		<td><?php echo $template->annotation($description, 'todo', $method) ?></td><?php if (!$iterator->isLast()) { ?>
</tr><tr><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php if ($todoConstants) { ?>	<table class="summary" id="constants">
	<caption>Constants summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($todoConstants) as $constant) { ?>
	<tr>
<?php $count = count($constant->annotations['todo']) ;if ($constant->declaringClassName) { ?>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($constant->declaringClassName))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($constant->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><code><a href="<?php echo htmlSpecialChars($template->safeurl($template->constantUrl($constant))) ?>
"><b><?php echo Nette\Templating\Helpers::escapeHtml($constant->name, ENT_NOQUOTES) ?></b></a></code></td>
<?php } else { if ($namespaces || $classes || $interfaces || $traits || $exceptions) { ?>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><?php if ($constant->namespaceName) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->namespaceUrl($constant->namespaceName))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($constant->namespaceName, ENT_NOQUOTES) ?>
</a><?php } ?>
</td>
<?php } ?>
		<td rowspan="<?php echo htmlSpecialChars($count) ?>"<?php if ($_l->tmp = array_filter(array('name'))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><code><a href="<?php echo htmlSpecialChars($template->safeurl($template->constantUrl($constant))) ?>
"><b><?php echo Nette\Templating\Helpers::escapeHtml($constant->shortName, ENT_NOQUOTES) ?></b></a></code></td>
<?php } $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($constant->annotations['todo']) as $description) { ?>
		<td><?php echo $template->annotation($description, 'todo', $constant) ?></td><?php if (!$iterator->isLast()) { ?>
</tr><tr><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php if ($todoProperties) { ?>	<table class="summary" id="properties">
	<caption>Properties summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($todoProperties) as $property) { ?>
	<tr>
<?php $count = count($property->annotations['todo']) ?>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($property->declaringClassName))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($property->declaringClassName, ENT_NOQUOTES) ?></a></td>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><a href="<?php echo htmlSpecialChars($template->safeurl($template->propertyUrl($property))) ?>
"><var>$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ?></var></a></td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($property->annotations['todo']) as $description) { ?>
		<td><?php echo $template->annotation($description, 'todo', $property) ?></td><?php if (!$iterator->isLast()) { ?>
</tr><tr><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php if ($todoFunctions) { ?>	<table class="summary" id="functions">
	<caption>Functions summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($todoFunctions) as $function) { ?>
	<tr>
<?php $count = count($function->annotations['todo']) ;if ($namespaces) { ?>		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>
"><?php if ($function->namespaceName) { ?><a href="<?php echo htmlSpecialChars($template->safeurl($template->namespaceUrl($function->namespaceName))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($function->namespaceName, ENT_NOQUOTES) ?>
</a><?php } ?>
</td>
<?php } ?>
		<td class="name" rowspan="<?php echo htmlSpecialChars($count) ?>"><code><a href="<?php echo htmlSpecialChars($template->safeurl($template->functionUrl($function))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($function->shortName, ENT_NOQUOTES) ?></a></code></td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($function->annotations['todo']) as $description) { ?>
		<td><?php echo $template->annotation($description, 'todo', $function) ?></td><?php if (!$iterator->isLast()) { ?>
</tr><tr><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>
</div>
<?php
}}

//
// block classes
//
if (!function_exists($_l->blocks['classes'][] = '_lb7c5cc4a688_classes')) { function _lb7c5cc4a688_classes($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($items) as $class) { ?>
	<tr>
		<td class="name" rowspan="<?php echo htmlSpecialChars(count($class->annotations['todo'])) ?>
"><a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($class))) ?>
"><?php echo Nette\Templating\Helpers::escapeHtml($class->name, ENT_NOQUOTES) ?></a></td>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->annotations['todo']) as $description) { ?>
		<td><?php echo $template->annotation($description, 'todo', $class) ?></td><?php if (!$iterator->isLast()) { ?>
</tr><tr><?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</tr>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;
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
 $active = 'todo' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 