<?php //netteCache[01]000367a:2:{s:4:"time";s:21:"0.92751400 1464682600";s:9:"callbacks";a:2:{i:0;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:9:"checkFile";}i:1;s:53:"F:\CMS\pear\data\ApiGen\templates\sublime\class.latte";i:2;i:1391390098;}i:1;a:3:{i:0;a:2:{i:0;s:19:"Nette\Caching\Cache";i:1;s:10:"checkConst";}i:1;s:25:"Nette\Framework::REVISION";i:2;s:22:"released on 2013-12-31";}}}?><?php

// source file: F:\CMS\pear\data\ApiGen\templates\sublime\class.latte

?><?php
// prolog Nette\Latte\Macros\CoreMacros
list($_l, $_g) = Nette\Latte\Macros\CoreMacros::initRuntime($template, 'yhxae7fusx')
;
// prolog Nette\Latte\Macros\UIMacros
//
// block title
//
if (!function_exists($_l->blocks['title'][] = '_lb5a10405bda_title')) { function _lb5a10405bda_title($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;if ($class->deprecated) { ?>Deprecated <?php } if ($class->interface) { ?>Interface<?php } elseif ($class->trait) { ?>
Trait<?php } else { ?>Class<?php } ?> <?php echo Nette\Templating\Helpers::escapeHtml($class->name, ENT_NOQUOTES) ;
}}

//
// block content
//
if (!function_exists($_l->blocks['content'][] = '_lb289ef5ff5c_content')) { function _lb289ef5ff5c_content($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div id="content" class="class">
	<h1<?php if ($_l->tmp = array_filter(array($class->deprecated ? 'deprecated' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php if ($class->interface) { ?>Interface<?php } elseif ($class->trait) { ?>Trait<?php } else { ?>
Class<?php } ?> <?php echo Nette\Templating\Helpers::escapeHtml($class->shortName, ENT_NOQUOTES) ?></h1>

<?php if ($class->valid) { ?>

<?php if ($template->longDescription($class)) { ?>	<div class="description">
	<?php echo $template->longDescription($class) ?>

	</div>
<?php } ?>

<?php if ($class->parentClass || $class->ownInterfaces || $class->ownTraits) { ?>	<dl class="tree">
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($tree) as $item) { ?>
		<dd style="padding-left:<?php echo htmlSpecialChars(Nette\Templating\Helpers::escapeCss(($iterator->counter - 1) * 30)) ?>px">
<?php if ($iterator->counter > 1) { ?>			<img src="resources/inherit.png" alt="Extended by">
<?php } if ($item->documented) { if ($_l->ifs[] = (!$iterator->last)) { ?>			<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($item))) ?>
"><?php } if ($iterator->isLast()) { ?><b><?php } ?><span<?php if ($_l->tmp = array_filter(array($item->deprecated ? 'deprecated' : NULL, !$item->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ?></span><?php if ($iterator->isLast()) { ?>
</b><?php } if (array_pop($_l->ifs)) { ?></a>
<?php } ?>
			<?php } else { echo Nette\Templating\Helpers::escapeHtml($item->name, ENT_NOQUOTES) ;} ?>

<?php $itemOwnInterfaces = $item->ownInterfaces ?>
			<?php if ($itemOwnInterfaces) { ?> implements <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($itemOwnInterfaces) as $interface) { ?>

<?php if ($_l->ifs[] = ($interface->documented)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($interface))) ?>
"><?php } ?>
<span<?php if ($_l->tmp = array_filter(array($interface->deprecated ? 'deprecated' : NULL, !$interface->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($interface->name, ENT_NOQUOTES) ?>
</span><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

			<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;} ?>

<?php $itemOwnTraits = $item->ownTraits ?>
			<?php if ($itemOwnTraits) { ?> uses <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($itemOwnTraits) as $trait) { ?>

<?php if ($_l->ifs[] = ($trait->documented)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($trait))) ?>
"><?php } ?>
<span<?php if ($_l->tmp = array_filter(array($trait->deprecated ? 'deprecated' : NULL, !$trait->valid ? 'invalid' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>
><?php echo Nette\Templating\Helpers::escapeHtml($trait->name, ENT_NOQUOTES) ?></span><?php if (array_pop($_l->ifs)) { ?>
</a><?php } if (!$iterator->isLast()) { ?>, <?php } ?>

			<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;} ?>

		</dd>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</dl>
<?php } ?>


<?php if ($directSubClasses) { ?>	<div>
		<h4>Direct known subclasses</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $directSubClasses) + get_defined_vars()) ?>
	</div>
<?php } ?>

<?php if ($indirectSubClasses) { ?>	<div>
		<h4>Indirect known subclasses</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $indirectSubClasses) + get_defined_vars()) ?>
	</div>
<?php } ?>

<?php if ($directImplementers) { ?>	<div>
		<h4>Direct known implementers</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $directImplementers) + get_defined_vars()) ?>
	</div>
<?php } ?>

<?php if ($indirectImplementers) { ?>	<div>
		<h4>Indirect known implementers</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $indirectImplementers) + get_defined_vars()) ?>
	</div>
<?php } ?>

<?php if ($directUsers) { ?>	<div>
		<h4>Direct Known Users</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $directUsers) + get_defined_vars()) ?>
	</div>
<?php } ?>

<?php if ($indirectUsers) { ?>	<div>
		<h4>Indirect Known Users</h4>
<?php call_user_func(reset($_l->blocks['children']), $_l, array('children' => $indirectUsers) + get_defined_vars()) ?>
	</div>
<?php } ?>

	<div class="info">
		<?php if (!$class->interface && !$class->trait && ($class->abstract || $class->final)) { ?>
<b><?php if ($class->abstract) { ?>Abstract<?php } else { ?>Final<?php } ?></b><br><?php } ?>

		<?php if ($class->internal) { ?><b>PHP Extension:</b> <a href="<?php echo htmlSpecialChars($template->safeurl($template->manualUrl($class->extension))) ?>
" title="Go to PHP documentation"><?php echo Nette\Templating\Helpers::escapeHtml($template->firstUpper($class->extension->name), ENT_NOQUOTES) ?>
</a><br><?php } ?>

		<?php if ($class->inNamespace()) { ?><b>Namespace:</b> <?php echo $template->namespaceLinks($class->namespaceName) ?>
<br><?php } ?>

		<?php if ($class->inPackage()) { ?><b>Package:</b> <?php echo $template->packageLinks($class->packageName) ?>
<br><?php } ?>


<?php $iterations = 0; foreach ($template->annotationSort($template->annotationFilter($class->annotations)) as $annotation => $values) { $iterations = 0; foreach ($values as $value) { ?>
				<b><?php echo Nette\Templating\Helpers::escapeHtml($template->annotationBeautify($annotation), ENT_NOQUOTES) ;if ($value) { ?>
:<?php } ?></b>
				<?php echo $template->annotation($value, $annotation, $class) ?><br>
<?php $iterations++; } $iterations++; } ?>
		<?php if ($class->internal) { ?><b>Documented at</b> <a href="<?php echo htmlSpecialChars($template->safeurl($template->manualUrl($class))) ?>
" title="Go to PHP documentation">php.net</a><?php } else { ?><b>Located at</b> <?php if ($_l->ifs[] = ($config->sourceCode)) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->sourceUrl($class))) ?>
" title="Go to source code"><?php } echo Nette\Templating\Helpers::escapeHtml($template->relativePath($class->fileName), ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } } ?><br>
	</div>

<?php $ownMethods = $class->ownMethods ;$ownMagicMethods = $class->ownMagicMethods ?>


<?php if ($ownMethods) { ?>	<table class="summary" id="methods">
	<caption>Methods summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($ownMethods) as $method) { call_user_func(reset($_l->blocks['method']), $_l, array('method' => $method) + get_defined_vars()) ;$iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->inheritedMethods) as $parentName => $methods) { ?>	<table class="summary inherited">
	<caption>Methods inherited from <?php if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($parentName))) ?>
#methods"><?php } echo Nette\Templating\Helpers::escapeHtml($parentName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($methods) as $method) { if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($method))) ?>
"><?php } if ($_l->ifs[] = ($method->deprecated)) { ?><span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (array_pop($_l->ifs)) { ?>
</a><?php } if (!$iterator->isLast()) { ?>, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->usedMethods) as $traitName => $methods) { ?>	<table class="summary used">
	<caption>Methods used from <?php if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($traitName))) ?>
#methods"><?php } echo Nette\Templating\Helpers::escapeHtml($traitName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($methods) as $data) { if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($data['method'], $data['method']->declaringTrait))) ?>
"><?php } if ($_l->ifs[] = ($data['method']->deprecated)) { ?><span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($data['method']->originalName, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (array_pop($_l->ifs)) { ?>
</a><?php } if ($data['aliases']) { ?>(as <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($data['aliases']) as $alias) { if ($_l->ifs[] = ($data['method']->deprecated)) { ?>
<span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($alias->name, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (!$iterator->isLast()) { ?>
, <?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>)<?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php if ($ownMagicMethods) { ?>	<table class="summary" id="methods">
	<caption>Magic methods summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($ownMagicMethods) as $method) { call_user_func(reset($_l->blocks['method']), $_l, array('method' => $method) + get_defined_vars()) ;$iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->inheritedMagicMethods) as $parentName => $methods) { ?>	<table class="summary inherited">
	<caption>Magic methods inherited from <?php if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($parentName))) ?>
#methods"><?php } echo Nette\Templating\Helpers::escapeHtml($parentName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($methods) as $method) { if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($method))) ?>
"><?php } if ($_l->ifs[] = ($method->deprecated)) { ?><span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (array_pop($_l->ifs)) { ?>
</a><?php } if (!$iterator->isLast()) { ?>, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->usedMagicMethods) as $traitName => $methods) { ?>	<table class="summary used">
	<caption>Magic methods used from <?php if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($traitName))) ?>
#methods"><?php } echo Nette\Templating\Helpers::escapeHtml($traitName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($methods) as $data) { if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($data['method'], $data['method']->declaringTrait))) ?>
"><?php } if ($_l->ifs[] = ($data['method']->deprecated)) { ?><span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($data['method']->originalName, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (array_pop($_l->ifs)) { ?>
</a><?php } if ($data['aliases']) { ?>(as <?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($data['aliases']) as $alias) { if ($_l->ifs[] = ($data['method']->deprecated)) { ?>
<span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($alias->name, ENT_NOQUOTES) ?>
()<?php if (array_pop($_l->ifs)) { ?></span><?php } if (!$iterator->isLast()) { ?>
, <?php } $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>)<?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>


<?php $ownConstants = $class->ownConstants ?>

<?php if ($ownConstants) { ?>	<table class="summary" id="constants">
	<caption>Constants summary</caption>
<?php $iterations = 0; foreach ($ownConstants as $constant) { ?>	<tr data-order="<?php echo htmlSpecialChars($constant->name) ?>
" id="<?php echo htmlSpecialChars($constant->name) ?>">
<?php $annotations = $constant->annotations ?>

		<td class="attributes"><code><?php echo $template->typeLinks($constant->typeHint, $constant) ?></code></td>
		<td class="name"><code>
<?php if ($class->internal) { ?>
				<a href="<?php echo htmlSpecialChars($template->safeurl($template->manualUrl($constant))) ?>
" title="Go to PHP documentation"><b><?php echo Nette\Templating\Helpers::escapeHtml($constant->name, ENT_NOQUOTES) ?></b></a>
<?php } else { if ($_l->ifs[] = ($config->sourceCode)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->sourceUrl($constant))) ?>
" title="Go to source code"><?php } ?>
<b><?php echo Nette\Templating\Helpers::escapeHtml($constant->name, ENT_NOQUOTES) ?>
</b><?php if (array_pop($_l->ifs)) { ?></a>
<?php } } ?>
		</code></td>
		<td class="value"><code><?php echo $template->highlightValue($constant->valueDefinition, $class) ?></code></td>
		<td class="description"><div>
			<a href="#<?php echo htmlSpecialChars($template->safeurl($constant->name)) ?>" class="anchor">#</a>

<?php if ($config->template['options']['elementDetailsCollapsed']) { ?>
			<div class="description short">
				<?php echo $template->shortDescription($constant, true) ?>

			</div>
<?php } ?>

			<div<?php if ($_l->tmp = array_filter(array('description', 'detailed', $config->template['options']['elementDetailsCollapsed'] ? 'hidden' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
				<?php echo $template->longDescription($constant) ?>


<?php $iterations = 0; foreach ($template->annotationSort($template->annotationFilter($annotations, array('var'))) as $annotation => $descriptions) { ?>
					<h4><?php echo Nette\Templating\Helpers::escapeHtml($template->annotationBeautify($annotation), ENT_NOQUOTES) ?></h4>
					<div class="list">
<?php $iterations = 0; foreach ($descriptions as $description) { if ($description) { ?>
							<?php echo $template->annotation($description, $annotation, $constant) ?><br>
<?php } $iterations++; } ?>
					</div>
<?php $iterations++; } ?>
			</div>
		</div></td>
	</tr>
<?php $iterations++; } ?>
	</table>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->inheritedConstants) as $parentName => $constants) { ?>	<table class="summary inherited">
	<caption>Constants inherited from <?php if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($parentName))) ?>
#constants"><?php } echo Nette\Templating\Helpers::escapeHtml($parentName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($constants) as $constant) { if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->constantUrl($constant))) ?>
"><?php } ?>
<b><?php if ($_l->ifs[] = ($constant->deprecated)) { ?><span class"deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($constant->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } ?>
</b><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>


<?php $ownProperties = $class->ownProperties ;$ownMagicProperties = $class->ownMagicProperties ?>

<?php if ($ownProperties) { ?>	<table class="summary" id="properties">
	<caption>Properties summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($ownProperties) as $property) { call_user_func(reset($_l->blocks['property']), $_l, array('property' => $property) + get_defined_vars()) ;$iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->inheritedProperties) as $parentName => $properties) { ?>	<table class="summary inherited">
	<caption>Properties inherited from <?php if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($parentName))) ?>
#properties"><?php } echo Nette\Templating\Helpers::escapeHtml($parentName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($properties) as $property) { if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->propertyUrl($property))) ?>
"><?php } ?>
<var><?php if ($_l->ifs[] = ($property->deprecated)) { ?><span class="deprecated"><?php } ?>
$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } ?>
</var><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->usedProperties) as $traitName => $properties) { ?>	<table class="summary used">
	<caption>Properties used from <?php if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($traitName))) ?>
#properties"><?php } echo Nette\Templating\Helpers::escapeHtml($traitName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($properties) as $property) { if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->propertyUrl($property, $property->declaringTrait))) ?>
"><?php } ?>
<var><?php if ($_l->ifs[] = ($property->deprecated)) { ?><span class="deprecated"><?php } ?>
$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } ?>
</var><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php if ($ownMagicProperties) { ?>	<table class="summary" id="magicProperties">
	<caption>Magic properties summary</caption>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($ownMagicProperties) as $property) { call_user_func(reset($_l->blocks['property']), $_l, array('property' => $property) + get_defined_vars()) ;$iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
	</table>
<?php } ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->inheritedMagicProperties) as $parentName => $properties) { ?>	<table class="summary inherited">
	<caption>Magic properties inherited from <?php if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($parentName))) ?>
#properties"><?php } echo Nette\Templating\Helpers::escapeHtml($parentName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($properties) as $property) { if ($_l->ifs[] = ($template->getClass($parentName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->propertyUrl($property))) ?>
"><?php } ?>
<var><?php if ($_l->ifs[] = ($property->deprecated)) { ?><span class="deprecated"><?php } ?>
$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } ?>
</var><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($class->usedMagicProperties) as $traitName => $properties) { ?>	<table class="summary used">
	<caption>Magic properties used from <?php if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($traitName))) ?>
#properties"><?php } echo Nette\Templating\Helpers::escapeHtml($traitName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</caption>
	<tr>
		<td><code>
<?php $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($properties) as $property) { if ($_l->ifs[] = ($template->getClass($traitName))) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->propertyUrl($property, $property->declaringTrait))) ?>
"><?php } ?>
<var><?php if ($_l->ifs[] = ($property->deprecated)) { ?><span class="deprecated"><?php } ?>
$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } ?>
</var><?php if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		</code></td>
	</tr>
	</table>
<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>

<?php } else { ?>
		<div class="invalid">
			<p>
				Documentation of this class could not be generated.
			</p>
			<p>
				Class was originally declared in <?php echo Nette\Templating\Helpers::escapeHtml($template->relativePath($class->fileName), ENT_NOQUOTES) ?> and is invalid because of:
			</p>
			<ul>
<?php $iterations = 0; foreach ($class->reasons as $reason) { ?>				<li>Class was redeclared in <?php echo Nette\Templating\Helpers::escapeHtml($template->relativePath($reason->getSender()->getFileName()), ENT_NOQUOTES) ?>.</li>
<?php $iterations++; } ?>
			</ul>
		</div>
<?php } ?>
</div>
<?php
}}

//
// block children
//
if (!function_exists($_l->blocks['children'][] = '_lb7e6114f0a6_children')) { function _lb7e6114f0a6_children($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;$iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($children) as $child) { if ($_l->ifs[] = ($child->documented)) { ?>
			<a href="<?php echo htmlSpecialChars($template->safeurl($template->classUrl($child))) ?>
"><?php } if ($_l->ifs[] = ($child->deprecated)) { ?><span class="deprecated"><?php } echo Nette\Templating\Helpers::escapeHtml($child->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</span><?php } if (array_pop($_l->ifs)) { ?></a><?php } if (!$iterator->isLast()) { ?>
, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ;
}}

//
// block method
//
if (!function_exists($_l->blocks['method'][] = '_lb2142d6d1cf_method')) { function _lb2142d6d1cf_method($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<tr data-order="<?php echo htmlSpecialChars($method->name) ?>" id="<?php if ($method->magic) { ?>
m<?php } ?>_<?php echo htmlSpecialChars($method->name) ?>">
<?php $annotations = $method->annotations ?>

		<td class="attributes"><code>
			<?php if (!$class->interface && $method->abstract) { ?>abstract<?php } elseif ($method->final) { ?>
final<?php } ?> <?php if ($method->protected) { ?>protected<?php } elseif ($method->private) { ?>
private<?php } else { ?>public<?php } ?> <?php if ($method->static) { ?>static<?php } ?>

			<?php if (isset($annotations['return'])) { echo $template->typeLinks($annotations['return'][0], $method) ;} ?>

			<?php if ($method->returnsReference()) { ?>&amp;<?php } ?>

			</code>
		</td>

		<td class="name"><div>
		<a class="anchor" href="#<?php if ($method->magic) { ?>m<?php } ?>_<?php echo htmlSpecialChars($template->safeurl($method->name)) ?>">#</a>
		<code><?php ob_start() ?>

<?php if ($class->internal) { ?>
				<a href="<?php echo htmlSpecialChars($template->safeurl($template->manualUrl($method))) ?>
" title="Go to PHP documentation"><?php echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ?></a>(
<?php } else { if ($_l->ifs[] = ($config->sourceCode)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->sourceUrl($method))) ?>
" title="Go to source code"><?php } echo Nette\Templating\Helpers::escapeHtml($method->name, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
(
<?php } $iterations = 0; foreach ($iterator = $_l->its[] = new Nette\Iterators\CachingIterator($method->parameters) as $parameter) { ?>
				<span><?php echo $template->typeLinks($parameter->typeHint, $method) ?>

				<var><?php if ($parameter->passedByReference) { ?>&amp; <?php } ?>$<?php echo Nette\Templating\Helpers::escapeHtml($parameter->name, ENT_NOQUOTES) ?>
</var><?php if ($parameter->defaultValueAvailable) { ?> = <?php echo $template->highlightPHP($parameter->defaultValueDefinition, $class) ;} elseif ($parameter->unlimited) { ?>
,…<?php } ?></span><?php if (!$iterator->isLast()) { ?>, <?php } ?>

<?php $iterations++; } array_pop($_l->its); $iterator = end($_l->its) ?>
		)<?php echo $template->strip(ob_get_clean()) ?></code>

<?php if ($config->template['options']['elementDetailsCollapsed']) { ?>
		<div class="description short">
			<?php echo $template->shortDescription($method, true) ?>

		</div>
<?php } ?>

		<div<?php if ($_l->tmp = array_filter(array('description', 'detailed', $config->template['options']['elementDetailsCollapsed'] ? 'hidden' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
			<?php echo $template->longDescription($method) ?>


<?php if (!$class->deprecated && $method->deprecated) { ?>
				<h4>Deprecated</h4>
<?php if (isset($annotations['deprecated'])) { ?>
				<div class="list">
<?php $iterations = 0; foreach ($annotations['deprecated'] as $description) { if ($description) { ?>
						<?php echo $template->annotation($description, 'deprecated', $method) ?><br>
<?php } $iterations++; } ?>
				</div>
<?php } } ?>

<?php if ($method->parameters && isset($annotations['param'])) { ?>
				<h4>Parameters</h4>
				<div class="list"><dl>
<?php $iterations = 0; foreach ($method->parameters as $parameter) { ?>
					<dt><var>$<?php echo Nette\Templating\Helpers::escapeHtml($parameter->name, ENT_NOQUOTES) ?>
</var><?php if ($parameter->unlimited) { ?>,…<?php } ?></dt>
					<dd><?php if (isset($annotations['param'][$parameter->position])) { echo $template->annotation($annotations['param'][$parameter->position], 'param', $method) ;} ?></dd>
<?php $iterations++; } ?>
				</dl></div>
<?php } ?>

<?php if (isset($annotations['return']) && 'void' !== $annotations['return'][0]) { ?>
				<h4>Returns</h4>
				<div class="list">
<?php $iterations = 0; foreach ($annotations['return'] as $description) { ?>
					<?php echo $template->annotation($description, 'return', $method) ?><br>
<?php $iterations++; } ?>
				</div>
<?php } ?>

<?php if (isset($annotations['throws'])) { ?>
				<h4>Throws</h4>
				<div class="list">
<?php $iterations = 0; foreach ($annotations['throws'] as $description) { ?>
					<?php echo $template->annotation($description, 'throws', $method) ?><br>
<?php $iterations++; } ?>
				</div>
<?php } ?>

<?php $iterations = 0; foreach ($template->annotationSort($template->annotationFilter($annotations, array('deprecated', 'param', 'return', 'throws'))) as $annotation => $descriptions) { ?>
				<h4><?php echo Nette\Templating\Helpers::escapeHtml($template->annotationBeautify($annotation), ENT_NOQUOTES) ?></h4>
				<div class="list">
<?php $iterations = 0; foreach ($descriptions as $description) { if ($description) { ?>
						<?php echo $template->annotation($description, $annotation, $method) ?><br>
<?php } $iterations++; } ?>
				</div>
<?php $iterations++; } ?>

<?php $overriddenMethod = $method->overriddenMethod ;if ($overriddenMethod) { ?>
				<h4>Overrides</h4>
				<div class="list"><code><?php if ($_l->ifs[] = ($template->getClass($overriddenMethod->declaringClassName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($overriddenMethod))) ?>
"><?php } echo Nette\Templating\Helpers::escapeHtml($overriddenMethod->prettyName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</code></div>
<?php } ?>

<?php $implementedMethod = $method->implementedMethod ;if ($implementedMethod) { ?>
				<h4>Implementation of</h4>
				<div class="list"><code><?php if ($_l->ifs[] = ($template->getClass($implementedMethod->declaringClassName))) { ?>
<a href="<?php echo htmlSpecialChars($template->safeurl($template->methodUrl($implementedMethod))) ?>
"><?php } echo Nette\Templating\Helpers::escapeHtml($implementedMethod->prettyName, ENT_NOQUOTES) ;if (array_pop($_l->ifs)) { ?>
</a><?php } ?>
</code></div>
<?php } ?>
		</div>
		</div></td>
	</tr>
<?php
}}

//
// block property
//
if (!function_exists($_l->blocks['property'][] = '_lb86f150256e_property')) { function _lb86f150256e_property($_l, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<tr data-order="<?php echo htmlSpecialChars($property->name) ?>" id="<?php if ($property->magic) { ?>
m<?php } ?>$<?php echo htmlSpecialChars($property->name) ?>">
		<td class="attributes"><code>
			<?php if ($property->protected) { ?>protected<?php } elseif ($property->private) { ?>
private<?php } else { ?>public<?php } ?> <?php if ($property->static) { ?>static<?php } ?>
 <?php if ($property->readOnly) { ?>read-only<?php } elseif ($property->writeOnly) { ?>
write-only<?php } ?>

			<?php echo $template->typeLinks($property->typeHint, $property) ?>

		</code></td>

		<td class="name">
<?php if ($class->internal) { ?>
				<a href="<?php echo htmlSpecialChars($template->safeurl($template->manualUrl($property))) ?>
" title="Go to PHP documentation"><var>$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ?></var></a>
<?php } else { if ($_l->ifs[] = ($config->sourceCode)) { ?>				<a href="<?php echo htmlSpecialChars($template->safeurl($template->sourceUrl($property))) ?>
" title="Go to source code"><?php } ?>
<var>$<?php echo Nette\Templating\Helpers::escapeHtml($property->name, ENT_NOQUOTES) ?>
</var><?php if (array_pop($_l->ifs)) { ?></a>
<?php } } ?>
		</td>
<?php if (!$property->magic) { ?>		<td class="value"><code><?php echo $template->highlightValue($property->defaultValueDefinition, $class) ?></code></td>
<?php } ?>
		<td class="description"><div>
			<a href="#<?php if ($property->magic) { ?>m<?php } ?>$<?php echo htmlSpecialChars($template->safeurl($property->name)) ?>" class="anchor">#</a>

<?php if ($config->template['options']['elementDetailsCollapsed']) { ?>
			<div class="description short">
				<?php echo $template->shortDescription($property, true) ?>

			</div>
<?php } ?>

			<div<?php if ($_l->tmp = array_filter(array('description', 'detailed', $config->template['options']['elementDetailsCollapsed'] ? 'hidden' : NULL))) echo ' class="' . htmlSpecialChars(implode(" ", array_unique($_l->tmp))) . '"' ?>>
				<?php echo $template->longDescription($property) ?>


<?php $iterations = 0; foreach ($template->annotationSort($template->annotationFilter($property->annotations, array('var'))) as $annotation => $descriptions) { ?>
					<h4><?php echo Nette\Templating\Helpers::escapeHtml($template->annotationBeautify($annotation), ENT_NOQUOTES) ?></h4>
					<div class="list">
<?php $iterations = 0; foreach ($descriptions as $description) { if ($description) { ?>
							<?php echo $template->annotation($description, $annotation, $property) ?><br>
<?php } $iterations++; } ?>
					</div>
<?php $iterations++; } ?>
			</div>
		</div></td>
	</tr>
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
 $active = 'class' ?>

<?php if ($_l->extends) { ob_end_clean(); return Nette\Latte\Macros\CoreMacros::includeTemplate($_l->extends, get_defined_vars(), $template)->render(); }
call_user_func(reset($_l->blocks['title']), $_l, get_defined_vars())  ?>


<?php call_user_func(reset($_l->blocks['content']), $_l, get_defined_vars()) ; 