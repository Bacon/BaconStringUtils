<?php
/**
 * BaconStringUtils
 *
 * @link      http://github.com/Bacon/BaconStringUtils For the canonical source repository
 * @copyright 2011-2014 Ben Scholzen 'DASPRiD'
 * @license   http://opensource.org/licenses/BSD-2-Clause Simplified BSD License
 */

namespace BaconStringUtils;

/**
 * Unicode to ASCII decoder.
 *
 * Ported from the Python UniDecode implementation.
 */
class UniDecoder
{
    /**
     * Transliteration tables.
     *
     * @var array
     */
    protected static $tables = array();

    /**
     * Decodes an UTF-8 encoded unicode string to ASCII.
     *
     * @param  string $string
     * @return string
     */
    public function decode($string)
    {
        $return = '';

        foreach (preg_split('()u', $string, -1, PREG_SPLIT_NO_EMPTY) as $char) {
            $codepoint = $this->uniOrd($char);

            if ($codepoint < 0x80) {
                // Basic ASCII
                $return .= chr($codepoint);
                continue;
            }

            if ($codepoint > 0xeffff) {
                // Characters in Private Use Area and above are ignored
                continue;
            }

            $section  = $codepoint >> 8;  // Chop off the last two hex digits
            $position = $codepoint % 256; // Last two hex digits

            if (!isset(self::$tables[$section])) {
                self::$tables[$section] = @include sprintf('%s/UniDecoder/x%03x.php', __DIR__, $section);
            }

            if (isset(self::$tables[$section][$position])) {
                $return .= self::$tables[$section][$position];
            }
        }

        return $return;
    }

    /**
     * Gets unicode codepoint from character.
     *
     * @param  string $char
     * @return integer
     */
    protected function uniOrd($char)
    {
        $h = ord($char[0]);

        if ($h <= 0x7f) {
            return $h;
        } elseif ($h < 0xc2) {
            return null;
        } elseif ($h <= 0xdf) {
            return ($h & 0x1f) << 6 | (ord($char[1]) & 0x3f);
        } elseif ($h <= 0xef) {
            return ($h & 0x0f) << 12 | (ord($char[1]) & 0x3f) << 6
                                     | (ord($char[2]) & 0x3f);
        } elseif ($h <= 0xf4) {
            return ($h & 0x0f) << 18 | (ord($char[1]) & 0x3f) << 12
                                     | (ord($char[2]) & 0x3f) << 6
                                     | (ord($char[3]) & 0x3f);
        } else {
            return null;
        }
    }
}
