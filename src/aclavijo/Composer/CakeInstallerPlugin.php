<?php

namespace aclavijo\Composer;

use Composer\Plugin\PluginInterface;
use Composer\Composer;
use Composer\IO\IOInterface;

class CakeInstallerPlugin implements PluginInterface
{
    public function activate(Composer $composer, IOInterface $io)
    {
        $installer = new CakeInstaller($io, $composer);
        $composer->getInstallationManager()->addInstaller($installer);
    }
}