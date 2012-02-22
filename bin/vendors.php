#!/usr/bin/env php
<?php

// dependent libraries for test environment

define('VENDOR_PATH', __DIR__ . '/../vendor');

if (!is_dir(VENDOR_PATH)) {
    mkdir(VENDOR_PATH, 0775, true);
}

$deps = array(
    array('Symfony', 'http://github.com/symfony/symfony.git', '3e9d937eb8fedb8a585559e04311ee9a39db421f'),
    array('Doctrine/ORM', 'https://github.com/doctrine/doctrine2.git', 'master'),
    array('Doctrine/Common', 'https://github.com/doctrine/common.git', 'master'),
    array('Doctrine/DBAL', 'https://github.com/doctrine/dbal.git', 'master'),
);

foreach ($deps as $dep) {
    list($name, $url, $rev) = $dep;

    echo "> Installing/Updating $name\n";

    $installDir = VENDOR_PATH.'/'.$name;
    if (!is_dir($installDir)) {
        system(sprintf('git clone %s %s', $url, $installDir));
    }

    system(sprintf('cd %s && git fetch origin && git reset --hard %s', $installDir, $rev));
}