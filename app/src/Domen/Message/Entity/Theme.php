<?php declare(strict_types=1);

namespace app\Domen\Message\Entity;

use Webmozart\Assert\Assert;

/**
 * @author Dmitry S
 */
final class Theme
{
    public function __construct(
        private readonly ThemeId $theme_id,
        private ThemeName        $theme_name
    )
    {
        Assert::notEmpty($this->theme_id);
        Assert::notEmpty($this->$theme_name);
    }

    public function setThemeName(ThemeName $theme_name): void
    {
        $this->theme_name = $theme_name;
    }

    public function getThemeId(): ThemeId
    {
        return $this->theme_id;
    }

    public function getThemeName(): ThemeName
    {
        return $this->theme_name;
    }
}