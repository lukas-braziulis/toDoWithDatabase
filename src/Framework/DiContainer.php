<?php

namespace ToDoSrc\Framework;

use RuntimeException;
use ToDoSrc\Controller\PageNotFoundController;
use ToDoSrc\Controller\ToDoController;
use ToDoSrc\Repository\TasksRepository;
use ToDoSrc\Service\TaskService;

class DiContainer
{
    private array $entries = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            throw new RuntimeException('Class ' . $id . 'not found in container.');
        }
        $entry = $this->entries[$id];

        return $entry($this);
    }

    public function has(string $id): bool
    {
        return isset($this->entries[$id]);
    }

    public function set(string $id, callable $callable): void
    {
        $this->entries[$id] = $callable;
    }

    public function loadDependencies()
    {
        $this->set(
            Router::class,
            function (DiContainer $container) {
                return new Router(
                    $container->get(PageNotFoundController::class),
                    $container->get(ToDoController::class)
                );
            }
        );

        $this->set(
            PageNotFoundController::class,
            function (DiContainer $container) {
                return new PageNotFoundController(); // cia nereikia get'inti, nes nereikia paduoti kokia nors kita klase i PageNotFoundController klase.
            }
        );

        $this->set(
            ToDoController::class,
            function (DiContainer $container) {
                return new ToDoController(
                    $container->get(TasksRepository::class),
                    $container->get(TaskService::class)
                );
            }
        );

        $this->set(
            TasksRepository::class,
            function (DiContainer $container) {
                return new TasksRepository();
            }
        );

        $this->set(
            TaskService::class,
            function (DiContainer $container) {
                return new TaskService(
                    $container->get(TasksRepository::class),
                );
            }
        );


    }
}