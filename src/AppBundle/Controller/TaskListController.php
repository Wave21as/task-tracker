<?php
/**
 * Created by PhpStorm.
 * User: WaveDev
 * Date: 22.10.2017
 * Time: 16:55
 */

namespace AppBundle\Controller;


use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;

/**
 * Kontroler odpowiedzialny za zarządzanie Listami zadań
 * Class TaskListController
 * @package AppBundle\Controller
 */
class TaskListController extends FOSRestController
{
    /**
     * Akcja odpowiedzialna za zwrot informacji o konkretnej liście zadań
     * @param int $id
     * @return View
     */
    public function getAction(int $id) : View
    {
        return new View("Will be implemented ".self::class, Response::HTTP_OK);
    }
}