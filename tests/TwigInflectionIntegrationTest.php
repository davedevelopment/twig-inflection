<?php

class TwigInflectionIntegrationTest extends \Twig_Test_IntegrationTestCase
{
    public function getExtensions()
    {
        return array(
            new \DaveDevelopment\TwigInflection\Twig\Extension\Inflection(),
        );
    }

    public function getFixturesDir()
    {
        return dirname(__FILE__).'/Fixtures/';
    } 
}
