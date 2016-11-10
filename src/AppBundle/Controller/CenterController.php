<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class CenterController extends Controller
{
    /**
     * @Route("/center", name="center")
     */
    public function indexAction(Request $request)
    {
/*        Представьте себе что вы с текущими знаниями и доступом к современным технологиям оказались в 70-80-е годы в СССР. Вам необходимо спроектировать систему учета посетителей библиотек. У каждого посетителя есть карточка с уникальным номером. В стране есть множество библиотек с множеством книг. Каждый посетитель может зайти в библиотеку и взять на себя несколько книг, отдавать их при этом не все сразу.
    - Спроектируйте блоки API со стороны каждой библиотеки, как она будет сообщать какие книги были взяты и какими читателями
    - Спроектируйте блоки API со стороны централизированного хранилища, которые будут:
 а) получать данные от библиотек о том, какие читатели какие книги брали и сдавали и когда
 б) ﻿выдавать данные о читателях, сколько у него книг на руках и генерировать произвольные отчеты по имени*/
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }


    /**
     * @Rest\View
     * @Route("/center/user/history/:id", name="get_user_history_by_id")
     */
    public function get_user_history_by_idAction(Request $request)
    {

        // возвращаем массив id книг с массивом id транзакций
        return [
            0 => [0, 1, 3, ],
            4 => [6, 7, 8, ],
        ];
    }


    /**
     * @Rest\View
     * @Route("/center/transaction/:id", name="get_transaction_by_id")
     */
    public function get_transaction_by_idAction(Request $request)
    {

        // возвращаем массив c датой выдачи и сдачи книги пользователем
        return [
            0 => [0, 1, 3, ],
            4 => [6, 7, 8, ],
        ];
    }
    /**
     * @Rest\View
     * @Route("/center/user/count_books/:id", name="get_count_books_at_user_by_id")
     */
    public function get_count_books_at_user_by_idAction(Request $request)
    {

        // возвращаем кол-во книг на руках у пользователя
        return 3;
    }

}
