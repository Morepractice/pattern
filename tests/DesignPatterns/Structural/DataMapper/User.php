<?php
namespace Tests\DesignPatterns\Structural\DataMapper;

class User
{
    /**
     *  @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    public function __construct(string $email, string $name)
    {
        $this->email = $email;
        $this->name = $name;
    }
    
    /**
     * 将数组转为用户对象
     */
    public static function formState(array $state):User
    {
        return new self($state['email'],$state['name']);
    }

    public function getEmail():string
    {
        return $this->email;
    }

    public function getName():string
    {
        return $this->name;
    }
}