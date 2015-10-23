<?php
if (file_exists('vendor/autoload.php')) {
    $loader = include 'vendor/autoload.php';
}

$translator = new Zend\I18n\Translator\Translator;
$translator->setLocale('en_US');

\Zend\Debug\Debug::dump($translator->getLocale());

$translator->addTranslationFilePattern('gettext', __DIR__ . '/texts', '%s.mo');
\Zend\Debug\Debug::dump(get_class_methods($translator));die();
?>

<?= $translator->translate('hahahaha test'); ?>