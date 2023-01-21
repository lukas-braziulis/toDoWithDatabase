<?php

namespace ToDoSrc\Controller;

use ToDoSrc\Framework\DbConnection;
use ToDoSrc\Repository\TasksRepository;
use ToDoSrc\Service\TaskService;

// Controller'is - pvz priima forma/duomenis ir tada nusprendzia ka su ja daryti. Ka atiduoti vartotojui.
// Pvz jis atsako, kad duomenis butu uzsaugoti ir paskui atvaizduoja juos klientui.
// Controller'is yra tarpininkas tarp serverio ir kliento/lankytojo. <<<-----<<<<<<
// Logikos nevygdo... Jis tik kontroliuoja


class ToDoController
{

    private TasksRepository $tasksRepository;
    private TaskService $taskService;

    public function __construct(TasksRepository $tasksRepository, TaskService $taskService)
    {
        $this->tasksRepository = $tasksRepository;
        $this->taskService = $taskService;
    }

    public function list()
    {
        $tasks = $this->tasksRepository->getAllTasks();

        $smarty = new \Smarty();
        $smarty->assign(['tasks' => $tasks]);
        $smarty->display(__DIR__ . '/../View/home_page.tpl');
    }

    public function loadFormForTaskCreation()
    {
        $smarty = new \Smarty();
        $smarty->display(__DIR__ . '/../View/task_create_page.tpl');
    }

    // Method for new task creation.
    public function create(array $request)
    {
        $this->taskService->create($request);

        // Redirecting to HomePage
        header("Location: /toDoWithDataBase/", TRUE, 301);
    }

    public function delete(array $request)
    {
        $this->taskService->delete($request);

        // Redirecting to HomePage
        header("Location: /toDoWithDataBase/", TRUE, 301);
    }

    public function loadEditForm(array $request)
    {
        $taskData = $this->taskService->getDataForEdit($request);

        $smarty = new \Smarty();
        $smarty->assign(['data' => $taskData]);
        $smarty->display(__DIR__ . '/../View/task_update_page.tpl');
    }

    public function edit(array $request)
    {
        $this->taskService->edit($request);

        // Redirecting to HomePage
        header("Location: /toDoWithDataBase/", TRUE, 301);
    }
}