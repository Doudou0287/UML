<?php
class Waiter {
    public function __construct(private array $tables = []) {
    }

    public function addTable(Table $table) {
        if (count($this->tables) >= 4) {
            throw new Exception('A waiter cannot be assigned to more than four tables.');
        }
        array_push($this->tables, $table);
    }

    public function removeTable(Table $table) {
        $key = array_search($table, $this->tables);
        if ($key !== false) {
            array_splice($this->tables, $key, 1);
        } else {
            throw new Exception('This table is not assigned to this waiter.');
        }
    }
}

class Table {
    public $waiter = null;

    public function __construct(Waiter $waiter) {
        $waiter->addTable($this);
        $this->waiter = $waiter;
    }

    public function unassignWaiter() {
        if ($this->waiter === null) {
            throw new Exception('This table is not assigned to a waiter.');
        }
        $this->waiter->removeTable($this);
        $this->waiter = null;
    }
}

// Create a waiter
$waiter = new Waiter();

// Create some tables and assign them to a waiter
$table1 = new Table($waiter);
$table2 = new Table($waiter);
$table3 = new Table($waiter);
$table4 = new Table($waiter);
// $table5 = new Table($waiter ); // this will be used to test the exception for too many tables

var_dump($table1);