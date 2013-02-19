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
            'singularize' => new \Twig_Filter_Function(__CLASS__.'::singularize'),
        );
    }

    /**
     * Singularize the $plural word if count == 1. If $singular is passed, it 
     * will be used instead of trying to use doctrine\inflector
     *
     * @param string  $plural   - chicken
     * @param int     $count      - e.g. 4
     * @param string  $singular     - (optional) chickens
     * @return string             
     */
    public static function singularize($plural, $count = 1, $singular = null)
    {
        $count = intval($count);

        if ($count != 1) {
            return $plural;
        }

        if (null == $singular) {
            $singular = \Doctrine\Common\Inflector\Inflector::singularize($plural);
        } 

        return $singular;
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
