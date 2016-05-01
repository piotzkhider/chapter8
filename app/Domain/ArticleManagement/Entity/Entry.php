<?php
declare (strict_types = 1);

namespace App\Domain\UserRegistration\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class User
 *
 * @ORM\Entity
 * @ORM\Table(name="entries")
 * @ORM\HasLifecycleCallbacks
 */
class Entry
{
    /**
     * @var int
     * @ORM\Column(name="id",type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    protected $body;

    /**
     * @var string
     * @ORM\Column(name="user_id",type="integer")
     */
    protected $userId;

    /**
     * created Time/Date
     *
     * @var int
     * @ORM\Column(name="created_at",type="datetime")
     */
    protected $createdAt;

    /**
     * Entry constructor.
     *
     * @param string $title
     * @param string $body
     * @param int    $userId
     */
    public function __construct(string $title, string $body, int $userId)
    {
        $this->title = $title;
        $this->body = $body;
        $this->userId = $userId;
    }

    /**
     * @return int
     */
    public function getId() : int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getBody() : string
    {
        return $this->body;
    }

    /**
     * @return string
     */
    public function getTitle() : string
    {
        return $this->title;
    }

    /**
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist
     */
    public function setCreatedAt()
    {
        $this->createdAt = new \DateTime("now");
    }
}
