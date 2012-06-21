<?php
require __DIR__.'/../Header.php';
$r = ManiaLib\Application\Request::getInstance();
?>
<div data-role="page">
	<?php require __DIR__.'/Header.php'; ?>
	<div data-role="content">
		<ul data-role="listview" data-theme="c" data-dividertheme="d" data-inset="true">
			<li data-icon="grid">
				<a href="<?= htmlentities($r->createLinkArgList('../maps', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Map list') ?></a>
			</li>
			<li data-icon="gear">
				<a href="<?= htmlentities($r->createLinkArgList('../rules', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Match rules') ?></a>
			</li>
			<li data-icon="gear">
				<a href="<?= htmlentities($r->createLinkArgList('../config', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Server configuration') ?></a>
			</li>
			<li data-icon="grid">
				<a href="<?= htmlentities($r->createLinkArgList('../players', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Players') ?></a>
			</li>
			<li data-icon="grid">
				<a href="<?= htmlentities($r->createLinkArgList('../teams', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Teams') ?></a>
			</li>
			<li data-icon="grid">
				<a href="<?= htmlentities($r->createLinkArgList('../chat', 'hostname', 'port'), ENT_QUOTES, 'UTF-8') ?>"
					data-ajax="false"><?= _('Chat') ?></a>
			</li>
		</ul>
	</div>
</div>
<?php require __DIR__.'/../Footer.php'; ?>