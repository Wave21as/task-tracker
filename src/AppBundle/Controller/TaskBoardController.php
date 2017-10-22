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
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Kontroler odpowiedzialny za zarządzanie tablicami zadań
 * Class TaskBoardController
 * @package AppBundle\Controller
 */
class TaskBoardController extends FOSRestController
{
    /**
     * Akcja odpowiedzialna za zwrot informacji o konkretnej tablicy zadań
     * @param int $id
     * @return View|Response
     */
    public function getAction(int $id) : View
    {
        return new View("Will be implemented ".self::class, Response::HTTP_OK);
    }

    /**
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function showAction(Request $request, int $id) : Response
    {
        return $this->render('AppBundle:task_board:index.html.twig');
    }
}