<?php
/**
 * Unit test for class Nohex\Eix\Services\Data\Validators\EmailValidator.
 */

namespace Nohex\Eix\Services\Data\Validators;

use Nohex\Eix\Services\Data\Validators\EmailValidator;

class EmailValidatorTest extends \PHPUnit_Framework_TestCase
{
    const VALID_EMAIL = 'eix@nohex.com';
    const INVALID_EMAIL = 'eix@nohex';

    public function testValidData()
    {
        $validator = new EmailValidator;

        $this->assertTrue(
            $validator->isValid(self::VALID_EMAIL),
            $validator->getFailMessage()
        );
    }

    public function testInvalidData()
    {
        $validator = new EmailValidator;

        $this->assertFalse(
            $validator->isValid(self::INVALID_EMAIL),
            $validator->getFailMessage()
        );
    }

}
