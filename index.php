<?php
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

$translator = new Zend\I18n\Translator\Translator;
$translator->setLocale('en_US');

$translator->addTranslationFilePattern('gettext', __DIR__ . '/texts', '%s.mo');
?>

<?= $translator->translate('hahahaha test'); ?>