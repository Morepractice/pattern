<?php
namespace Tests\DesignPatterns\Structural\FluentInterface;

class Sql
{
    /**
     * @var array
     */
    private $fields;


    /**
     * @var array
     */
    private $from;

    /**
     * @var array
     */
    private $where;

    public function select(array $fields):Sql
    {
        $this->fields = $fields;

        return $this;
    }

    public function from(string $table,string $alias):Sql
    {
        $this->from[] = $table.' AS '.$alias;
        return $this;
    }

    public function where(string $condition):Sql
    {
        $this->where[] = $condition;
        return $this;
    }

    public function  __toString():string
    {
        return 'SELECT '.implode(',', $this->fields)
            .' FROM '.implode(',', $this->from)
            .' WHERE '.implode(' AND ', $this->where);
    }
}