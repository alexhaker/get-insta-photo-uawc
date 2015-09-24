<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return $this->render('AppBundle:Default:index.html.twig', array());
    }

    /**
    * @Route("/search-user", name="search_user")
    */
    public function getInstagramUsersAction(Request $request)
    {
        $q = $request->get('q', null);

        if (!empty($q)) {
            $api = $this->get('instaphp');
            $result = $api->Users->Search($q);
            //$result = $result->items;
        } else {
            $result = array();
        }

        return new JsonResponse($result);
    }

    /**
    * @Route("/get-user-photo", name="get_user_photo")
    */
    public function getUserPhotoAction(Request $request)
    {
        $userId = $request->get('id', null);

        if (!empty($userId) && is_numeric($userId)) {
            $api = $this->get('instaphp');
            $result = $api->Users->Recent($userId, array('count' => 20));
        } else {
            $result = array();
        }

        return new JsonResponse($result);
    }

    /**
    * @Route("/get-feed-photo", name="get_feed_photo")
    */
    public function getUserFeedPhotosAction(Request $request)
    {
        $userId = $request->get('id', null);

        if (!empty($user_id) && is_numeric($user_id)) {
            $api = $this->get('instaphp');
            $result = $api->Users->Feed($user_id, array('count' => 20));
        } else {
            $result = array();
        }

        return new JsonResponse($result);
    }

}
