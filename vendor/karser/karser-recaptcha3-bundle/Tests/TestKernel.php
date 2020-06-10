<?php declare(strict_types=1);

namespace Karser\Recaptcha3Bundle\Tests;

use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\HttpKernel\Kernel;

class TestKernel extends Kernel
{
    private $configurationFilename;

    /**
     * Defines the configuration filename.
     *
     * @param string $filename
     */
    public function setConfigurationFilename($filename)
    {
        $this->configurationFilename = $filename;
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        return [
            new \Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new \Symfony\Bundle\TwigBundle\TwigBundle(),
            new \Karser\Recaptcha3Bundle\KarserRecaptcha3Bundle(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->configurationFilename);
    }

    public function getLogDir()
    {
        return sys_get_temp_dir().'/KarserRecaptcha3Bundle/log';
    }

    public function getCacheDir()
    {
        return sys_get_temp_dir().'/KarserRecaptcha3Bundle/cache/'.$this->environment;
    }
}
