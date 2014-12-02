<?php

require_once 'vendor/erwanncordon/behatMain/BehatMain/src/features/bootstrap/DefaultContext.php';
/**
 * Defines application features from the specific context.
 */
class FeatureContext extends DefaultContext
{
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @Given I write a highlevel step
     */
    public function iWriteAHighLevelStep()
    {
        assertTrue(true);
    }
}
