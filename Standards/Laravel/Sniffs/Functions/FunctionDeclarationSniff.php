<?php

use PHP_CodeSniffer\Exceptions\RuntimeException;

/**
 * Function Declaration.
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Antonio Carlos Ribeiro <acr@antoniocarlosribeiro.com>
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: @package_version@
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
if (class_exists('PHP_CodeSniffer\Sniffs\AbstractPatternSniff', true) === false) {
    throw new RuntimeException('Class PHP_CodeSniffer\Sniffs\AbstractPatternSniff not found');
}

class Laravel_Sniffs_Functions_FunctionDeclarationSniff extends PHP_CodeSniffer\Sniffs\AbstractPatternSniff
{
    /**
     * Returns an array of patterns to check are correct.
     *
     * @return array
     */
    protected function getPatterns()
    {
        return array(
            'function abc(...);',
            "function abc(...)\n",
            'abstract function abc(...);',
        );
    }//end getPatterns()
}//end class
