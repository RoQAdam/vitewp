<?php

include trailingslashit(get_template_directory()) . 'vitewp/helpers.php';

spl_autoload_register(function ($className) {
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';

    if ($lastNsPos = strrpos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = lcfirst(str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR);
    }

    if (false === strpos($namespace, 'Vitewp')) {
        return;
    }

    $fileName .= str_replace('_', DIRECTORY_SEPARATOR, $className) . '.php';
    $filePath = trailingslashit(get_template_directory()) . $fileName;

    if (file_exists($filePath)) {
        include_once($filePath);
    }
});