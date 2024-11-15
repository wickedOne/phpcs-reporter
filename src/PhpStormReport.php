<?php

declare(strict_types=1);

/*
 * This file is part of WickedOne\PHPCSReporter.
 *
 * (c) wicliff <wicliff.wolda@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WickedOne\PHPCSReport;

use PHP_CodeSniffer\Files\File;
use PHP_CodeSniffer\Reports\Full;

/**
 * PhpStorm Report.
 *
 * @author wicliff <wicliff.wolda@gmail.com>
 */
class PhpStormReport extends Full
{
    /**
     * {@inheritdoc.
     */
    public function generateFileReport($report, File $phpcsFile, $showSources = false, $width = 80): bool
    {
        if (0 === $report['errors'] && 0 === $report['warnings']) {
            return false;
        }

        parent::generateFileReport($report, $phpcsFile, $showSources, $width);

        if (\count($report['messages']) > 1) {
            echo \sprintf('✏️  phpstorm://open?file=%s', $phpcsFile->path).\PHP_EOL;
        } else {
            echo \sprintf('✏️  phpstorm://open?file=%s&line=%d', $phpcsFile->path, key($report['messages'])).\PHP_EOL;
        }

        return true;
    }
}
