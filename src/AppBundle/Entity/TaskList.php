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
 * Class TaskList
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class TaskList
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
     * @var TaskBoard
     * @ORM\Column(nullable=false)
     * @ORM\ManyToOne(targetEntity="Dashboard")
     * @ORM\JoinColumn(name="dashboard_id", referencedColumnName="id")
     */
    public $dashboard;

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
     * @return TaskList
     */
    public function setId(int $id): TaskList
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
     * @return TaskList
     */
    public function setName($name) : TaskList
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
     * Set dashboard
     *
     * @param TaskBoard $dashboard
     *
     * @return TaskList
     */
    public function setDashboard(TaskBoard $dashboard = null) : TaskList
    {
        $this->dashboard = $dashboard;

        return $this;
    }

    /**
     * Get dashboard
     *
     * @return TaskBoard
     */
    public function getDashboard() : TaskBoard
    {
        return $this->dashboard;
    }

    /**
     * @param mixed $addDate
     * @return TaskList
     */
    public function setAddDate(\DateTime $addDate) : TaskList
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
     * @return TaskList
     */
    public function setUpdateDate(\DateTime $updateDate) : TaskList
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
