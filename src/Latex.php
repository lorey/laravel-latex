<?php

namespace Lorey\Latex;

/**
 * Class for dealing with LaTeX output.
 * @package App
 */
class Latex
{
    public static function escape($string)
    {
        $string = str_replace('\\', '\textbackslash', $string);

        $string = str_replace('&', '\&', $string);
        $string = str_replace('%', '\%', $string);
        $string = str_replace('$', '\$', $string);
        $string = str_replace('#', '\#', $string);
        $string = str_replace('_', '\_', $string);
        $string = str_replace('{', '\{', $string);
        $string = str_replace('}', '\}', $string);

        $string = str_replace('~', '\textasciitilde', $string);
        $string = str_replace('^', '\textasciicircum', $string);

        return $string;
    }
}