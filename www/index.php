<?php
define('DEDICATED_MANAGER_VERSION', '1.3');

require_once __DIR__.'/../libraries/autoload.php';
I18n\Functions::LOAD;
\ManiaLib\Application\Bootstrapper::run();
?>