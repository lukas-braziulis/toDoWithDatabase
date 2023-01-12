<?php

namespace ToDoSrc\Framework;

use ToDoSrc\Controller\PageNotFoundController;
use ToDoSrc\Controller\ToDoController;

class Router
{
    private PageNotFoundController $pageNotFoundController;
    private ToDoController $toDoController;

    public function __construct(
        PageNotFoundController $pageNotFoundController,
        ToDoController $toDoController
    )
    {
        $this->pageNotFoundController = $pageNotFoundController;
        $this->toDoController = $toDoController;
    }

    public function process(string $route, array $request = null)
    {
        switch ($route) {
            case '/':
               $this->toDoController->list();
                break;
            case '/new':
                $this->toDoController->loadFormForTaskCreation();
                break;
            case '/create':
                $this->toDoController->create($request);
                break;
            case '/delete':
                $this->toDoController->delete($request);
                break;
            case '/loadEditForm':
                $this->toDoController->loadEditForm($request);
                break;
            default:
                $this->pageNotFoundController->display();
                break;
        }
    }
}