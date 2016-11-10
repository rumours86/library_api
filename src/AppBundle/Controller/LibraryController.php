<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;

class LibraryController extends Controller
{
    /**
     * @Route("/", name="homepage")
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
     * @Route("/library/list_active_readers", name="list_active_readers")
     */
    public function list_active_readersAction(Request $request)
    {

        // возвращаем массив id пользователей с массивом id книг
        return [
            3 => [0, 1, 3, ],
            4 => [6, 7, 8, ],
        ];
    }

    /**
     * @Rest\View
     * @Route("/library/list_books_on_hand", name="list_books_on_hand")
     */
    public function list_books_on_handAction(Request $request)
    {
        // возвращаем массив id книг
        return [
            0, 1, 3, 6, 7, 8,
        ];
    }

    /**
     * @Rest\View
     * @Route("/library/user/:id", name="get_user_by_id")
     */
    public function get_user_by_idAction(Request $request)
    {
        // возвращаем анкету пользователя
        return [
            'id' => 3,
            'surname' => 'Иванов',
            // и тд
        ];
    }
    /**
     * @Rest\View
     * @Route("/library/book/:id", name="get_book_by_id")
     */
    public function get_book_by_idAction(Request $request)
    {
        // возвращаем информацию о книге
        return [
            'id' => 3,
            'author' => 'Толстой',
            // и тд
        ];
    }
}
