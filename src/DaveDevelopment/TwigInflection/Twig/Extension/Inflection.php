<?php

namespace DaveDevelopment\TwigInflection\Twig\Extension;

class Inflection extends \Twig_Extension
{
    public function getName()
    {
        return "TwigInflection";
    }

    public function getFilters()
    {
        return array(
            'pluralize' => new \Twig_Filter_Function(__CLASS__.'::pluralize'),
        );
    }

    /**
     * Pluralize the $singular word if count !== 1. If $plural is passed, it 
     * will be used instead of trying to use doctrine\inflector
     *
     * pluralize(4, 'chicken') => 4 chickens
     *
     * @param int     $count      - e.g. 4
     * @param string  $singular   - chicken
     * @param string  $plural     - (optional) chickens
     * @return string             
     */
    public static function pluralize($count, $singular, $plural = null)
    {
        $count = intval($count);

        if ($count == 1) {
            return sprintf("%d %s", $count, $singular);
        }

        if (null == $plural) {
            $plural = \Doctrine\Common\Inflector\Inflector::pluralize($singular);
        } 

        return sprintf("%d %s", $count, $plural);
    }
}
