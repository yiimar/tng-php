<?php declare(strict_types=1);

namespace app\Domen\Message\Entity;

use app\Domen\User\Entity\UserId;

/**
 * @author Dmitry S
 */
final class Message
{
    public function __construct(
        private readonly MessageId $message_id,
        private readonly ThemeId $theme_id,
        private MessageText $message_text,
        private readonly MessageTime $message_time,
        private readonly UserId $user_id
    ) {
    }

    public function setMessageText(MessageText $message_text): void
    {
        $this->message_text = $message_text;
    }

    public function getMessageId(): MessageId
    {
        return $this->message_id;
    }

    public function getThemeId(): ThemeId
    {
        return $this->theme_id;
    }

    public function getMessageText(): MessageText
    {
        return $this->message_text;
    }

    /**
     * @return \app\Domen\Message\Entity\MessageTime
     */
    public function getMessageTime(): MessageTime
    {
        return $this->message_time;
    }

    /**
     * @return \app\Domen\User\Entity\UserId
     */
    public function getUserId(): UserId
    {
        return $this->user_id;
    }
}