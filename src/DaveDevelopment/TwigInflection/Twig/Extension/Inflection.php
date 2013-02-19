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
     * @param string  $singular   - chicken
     * @param int     $count      - e.g. 4
     * @param string  $plural     - (optional) chickens
     * @return string             
     */
    public static function pluralize($singular, $count = 2, $plural = null)
    {
        $count = intval($count);

        if ($count == 1) {
            return $singular;
        }

        if (null == $plural) {
            $plural = \Doctrine\Common\Inflector\Inflector::pluralize($singular);
        } 

        return $plural;
    }
}
