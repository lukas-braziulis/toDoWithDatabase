<?php

namespace ToDoSrc\Service;

use ToDoSrc\Repository\TasksRepository;


class TaskService
{
    private TasksRepository $tasksRepository;

    public function __construct(TasksRepository $tasksRepository)
    {
        $this->tasksRepository = $tasksRepository;
    }

    // vietoj pasikartojancio kodo patikrinant name, deccription, id - galima sukurti tris privacias funkcijas:
    // validateName(); validateDecription(); validateId();
    // ir naudotis tais metodais, vietoj copy-paste kodo. (zr. zemiau)

        public function create(array $request)
        {
            if(!isset($request['name']) || empty($request['name'])) {
                throw new \Exception('Name field is required.');
            }

            if(!isset($request['description']) || empty($request['description'])) {
                throw new \Exception('Description field is required.');
            }

            $this->tasksRepository->createNewTask($request['name'], $request['description']);
        }

        public function delete(array $request): void
        {
            if(!isset($request['task_id']) || empty($request['task_id'])) {
                throw new \Exception('Task ID is empty or not provided.');
            }

            $this->tasksRepository->delete($request['task_id']);
        }

        public function getDataForEdit(array $request): array
        {
            if(!isset($request['task_id']) || empty($request['task_id'])) {
                throw new \Exception('Task ID is empty or not provided.');
            }

           $data = $this->tasksRepository->getTaskById($request['task_id']);

            if(!empty($data)){ // tikrina ar grizo ne tuscias masyvas.. kartu is multi-dimensinio masyvo tampa viendimensiniu
                return $data[0];
            }
        }

        public function edit(array $request): void
        {
            if(!isset($request['name']) || empty($request['name'])) {
                throw new \Exception('Name field is required.');
            }

            if(!isset($request['description']) || empty($request['description'])) {
                throw new \Exception('Description field is required.');
            }

            if(!isset($request['task_id']) || empty($request['task_id'])) {
                throw new \Exception('Task ID is empty or not provided.');
            }

            $this->tasksRepository->editTaskById((int)$request['task_id'], $request['name'], $request['description']);

        }

    /*
    private function validateName(string $name): bool
    {
        if (!isset($name) || empty($name)) {
            throw new \Exception('Name field is required.');
        }
        return true;
    }

    private function validateDescription(string $description): bool
    {
        if (!isset($description) || empty($description)) {
            throw new \Exception('Description field is required.');
        }
        return true;
    }

    private function validateId(string $id): bool
    {
        if (!isset($id) || empty($id)) {
            throw new \Exception('Task ID is empty or not provided.');

        }
        return true;
    }
    */

}