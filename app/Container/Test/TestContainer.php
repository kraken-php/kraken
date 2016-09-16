<?php

namespace App\Container\Test;

use Kraken\Core\CoreInterface;
use Kraken\Runtime\RuntimeContainer;
use Kraken\Runtime\RuntimeContainerInterface;

class TestContainer extends RuntimeContainer implements RuntimeContainerInterface
{
    /**
     * @var string
     */
    protected $endpoint = 'tcp://%localhost%:2080';

    /**
     * @override
     * @inheritDoc
     */
    public function genEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function config(CoreInterface $core)
    {
        return [];
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function boot(CoreInterface $core)
    {
        return $this;
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function construct(CoreInterface $core)
    {
        $this->onCreate(function() {
            $this->onCreateHandler();
        });

        return $this;
    }

    /**
     *
     */
    private function onCreateHandler()
    {
        $loop = $this->getLoop();

        $loop->addPeriodicTimer(1, function() {
            echo 'Runtime::[' . $this->getAlias() . '] is alive and ' . time() . PHP_EOL;
        });
    }
}
