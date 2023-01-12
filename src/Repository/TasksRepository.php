<?php

namespace ToDoSrc\Repository;

use ToDoSrc\Framework\DbConnection;

// Repository darbas imti data, issaugoti data ir atiduoti data.
// Logikos nevygdo.

class TasksRepository
{
    private function db()
    {
        $instance = DbConnection::getInstance();
        return $instance->getConnection();
    }

    public function getAllTasks()
    {
        $conn = $this->db();
        $statement = $conn->prepare('SELECT * FROM tasks');
        $statement->execute();

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function createNewTask(string $name, string $description)
    {
        $conn = $this->db();

        $statement = $conn->prepare('INSERT INTO tasks (name, description) values (:name, :description);');
        $statement->execute(['name' => $name, 'description' => $description]);

        // return nereikalingas saugant duomenis i duombaze.. nereikia tau nieko pamatyt.
    }

    public function delete(string $taskId): void
    {
        $conn = $this->db();

        $statement = $conn->prepare('DELETE FROM tasks WHERE id = :taskId;');
        $statement->execute(['taskId' => $taskId]);

    }

    public function getTaskById(string $taskId): array
    {
        $conn = $this->db();
        $statement = $conn->prepare('SELECT * FROM tasks WHERE id = :taskId');
        $statement->execute(['taskId' => $taskId]);

        return $statement->fetchAll(\PDO::FETCH_ASSOC);
    }
}

