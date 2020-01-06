<?php 
namespace Tests\DesignPatterns\Creational\Pool;

class WorkerPool implements \Countable
{
    /**
     * @var StringReverseWorker[]
     */
    private $freeWorkers = [];

    /**
     * @var StringReverseWorker[]
     */
    private $occupiedWorkers = [];
    
    public function get():StringReverseWorker
    {
        if(count($this->freeWorkers) == 0)
        {
            $worker = new StringReverseWorker();
        }else{
            $worker = array_pop($this->freeWorkers);
        }

        $key = spl_object_hash($worker);
        $this->occupiedWorkers[$key] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if(isset($this->occupiedWorkers[$key])){
            $this->freeWorkers[$key] = $worker;
            unset($this->occupiedWorkers[$key]);
        }
    }
    
    public function count(): int
    {
        return count($this->freeWorkers) + count($this->occupiedWorkers);
    }
}