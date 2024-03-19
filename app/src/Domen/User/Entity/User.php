<?php declare(strict_types=1);

namespace app\Domen\User\Entity;

use Exception;

/**
 * @author Dmitry S
 */
final class User
{
    public function __construct(
        private readonly UserId $user_id,
        private ?UserHash $user_hash
    ) {}

    public function getUserId(): UserId
    {
        return $this->user_id;
    }

    public function getUserHash(): ?UserHash
    {
        return $this->user_hash;
    }

    /**
     * @throws \Exception
     */
    public function setUserHash(UserId $user_id): self
    {
        $template = $user_id->__tostring() . time();
        $this->user_hash = UserHash::generate($template) ?? throw new Exception('Ошибка генерации хеша');

        return $this;
    }
}