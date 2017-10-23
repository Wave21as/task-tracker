<?php
/**
 * Created by PhpStorm.
 * User: WaveDev
 * Date: 23.10.2017
 * Time: 20:22
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * Class Task
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Task
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
     * @ORM\Column(type="text", nullable=false)
     */
    public $content = '';

    /**
     * One task has many Subtasks.
     * @var Collection
     * @ORM\OneToMany(targetEntity="Task", mappedBy="parentTask")
     */
    private $subtasks;

    /**
     * Many tasks belongs to one parent task.
     * @var Task
     * @ORM\ManyToOne(targetEntity="Task", inversedBy="subtasks")
     * @ORM\JoinColumn(name="parent_task_id", referencedColumnName="id")
     */
    public $parentTask;

    /**
     * @var TaskList
     * @ORM\Column(nullable=false)
     * @ORM\ManyToOne(targetEntity="TaskList")
     * @ORM\JoinColumn(name="task_list_id", referencedColumnName="id")
     */
    public $taskList;

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
     * Constructor
     */
    public function __construct()
    {
        $this->subtasks = new ArrayCollection();
    }

    /**
     * @param int $id
     * @return Task
     */
    public function setId(int $id): Task
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
     * @return Task
     */
    public function setName($name) : Task
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
     * Set content
     *
     * @param string $content
     *
     * @return Task
     */
    public function setContent($content) : Task
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent() : string
    {
        return $this->content;
    }

    /**
     * Add subtask
     *
     * @param Task $subtask
     *
     * @return Task
     */
    public function addSubtask(Task $subtask) : Task
    {
        $this->subtasks[] = $subtask;

        return $this;
    }

    /**
     * Remove subtask
     *
     * @param Task $subtask
     */
    public function removeSubtask(Task $subtask) : void
    {
        $this->subtasks->removeElement($subtask);
    }

    /**
     * Get subtasks
     *
     * @return Collection
     */
    public function getSubtasks() : Collection
    {
        return $this->subtasks;
    }

    /**
     * Set parentTask
     *
     * @param Task $parentTask
     *
     * @return Task
     */
    public function setParentTask(Task $parentTask = null) : Task
    {
        $this->parentTask = $parentTask;

        return $this;
    }

    /**
     * Get parentTask
     *
     * @return Task|null
     */
    public function getParentTask() : ?Task
    {
        return $this->parentTask;
    }

    /**
     * Set taskList
     *
     * @param TaskList $taskList
     *
     * @return Task
     */
    public function setTaskList(TaskList $taskList = null) : Task
    {
        $this->taskList = $taskList;

        return $this;
    }

    /**
     * Get taskList
     *
     * @return TaskList
     */
    public function getTaskList() : TaskList
    {
        return $this->taskList;
    }

    /**
     * @param mixed $addDate
     * @return Task
     */
    public function setAddDate(\DateTime $addDate) : Task
    {
        $this->addDate = $addDate;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAddDate() : ?\DateTime
    {
        return $this->addDate;
    }

    /**
     * @param mixed $updateDate
     * @return Task
     */
    public function setUpdateDate(\DateTime $updateDate) : Task
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
