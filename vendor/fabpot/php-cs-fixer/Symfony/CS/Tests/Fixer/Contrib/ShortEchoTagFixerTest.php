<?php

/*
 * This file is part of the PHP CS utility.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Symfony\CS\Tests\Fixer\Contrib;

use Symfony\CS\Tests\Fixer\AbstractFixerTestBase;

/**
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ShortEchoTagFixerTest extends AbstractFixerTestBase
{
    /**
     * @dataProvider provideClosingTagExamples
     */
    public function testOneLineFix($expected, $input = null)
    {
        if (50400 > PHP_VERSION_ID && !ini_get('short_open_tag')) {
            // On PHP <5.4 short echo tag is parsed as T_INLINE_HTML if short_open_tag is disabled
            // On PHP >=5.4 short echo tag is always parsed properly regardless of short_open_tag  option
            $this->markTestSkipped('PHP 5.4 (or later) or short_open_tag option is required.');
        }

        $this->makeTest($expected, $input);
    }

    public function provideClosingTagExamples()
    {
        return array(
            array('<?php echo \'Foo\';', '<?= \'Foo\';'),
            array('<?php echo \'Foo\'; ?> PLAIN TEXT', '<?= \'Foo\'; ?> PLAIN TEXT'),
            array('PLAIN TEXT<?php echo \'Foo\'; ?>', 'PLAIN TEXT<?= \'Foo\'; ?>'),
            array('<?php echo \'Foo\'; ?> <?php echo \'Bar\'; ?>', '<?= \'Foo\'; ?> <?= \'Bar\'; ?>'),
            array('<?php echo foo();', '<?=foo();'),
        );
    }
}
