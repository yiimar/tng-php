<?php declare(strict_types=1);

namespace app\Domen\User\Entity;

use Exception;
use G4\ValueObject\Md5;

/**
 * @author Dmitry S
 */
class UserHash extends Md5
{
    /**
     * Ошибка в библиотеке:
     * в методе:
     * `      public static function calculateMd5($value)
     *      {
     *           return new self(md5($value));
     *      }
     * `
     * необходимо заменить `self` на `static`. Сейчас в потомках ругается, что тип не
     * актуальный, а родительский
     *
     * Исправляем...
     *
     * @param string $value
     * @return static|null
     */
    public static function generate(string $value): ?self
    {
        try {
            $result = new self(md5($value));
        } catch (Exception) {
            $result = null;
        }
        return $result;
    }
}