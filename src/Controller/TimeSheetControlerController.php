<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class TimeSheetControlerController extends AbstractController
{
    /**
     * @Route("/time/sheet/controler", name="time_sheet_controler")
     */
    public function index()
    {
        return $this->render('time_sheet_controler/index.html.twig', [
            'controller_name' => 'TimeSheetControlerController',
        ]);


    }
}
