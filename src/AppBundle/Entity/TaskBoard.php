<?php
/**
 * Created by PhpStorm.
 * User: WaveDev
 * Date: 23.10.2017
 * Time: 20:22
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Class TaskBoard
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class TaskBoard
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=false)
     */
    public $name = '';

    /**
     * @var string
     * @ORM\Column(type="string")
     */
    public $description = '';

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $addDate;

    /**
     * @var \DateTime
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $updateDate;

    /**
     * @param int $id
     * @return TaskBoard
     */
    public function setId(int $id): TaskBoard
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return TaskBoard
     */
    public function setName($name) : TaskBoard
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName() : string
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return TaskBoard
     */
    public function setDescription($description) : TaskBoard
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription() : string
    {
        return $this->description;
    }

    /**
     * @param mixed $addDate
     * @return TaskBoard
     */
    public function setAddDate(\DateTime $addDate) : TaskBoard
    {
        $this->addDate = $addDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddDate() : \DateTime
    {
        return $this->addDate;
    }

    /**
     * @param mixed $updateDate
     * @return TaskBoard
     */
    public function setUpdateDate(\DateTime $updateDate) : TaskBoard
    {
        $this->updateDate = $updateDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdateDate() : \DateTime
    {
        return $this->updateDate;
    }

}
