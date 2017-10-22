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
 * Kontroler odpowiedzialny za obsługe tagów aplikacji.
 * Class TagController
 * @package AppBundle\Controller
 */
class TagController extends FOSRestController
{
    /**
     * Akcja odpowiedzialana za zwrot informacji o konkretnym tagu
     * @param int $id
     * @return View
     */
    public function getAction(int $id) : View
    {
        return new View("Will be implemented ".self::class, Response::HTTP_OK);
    }
}