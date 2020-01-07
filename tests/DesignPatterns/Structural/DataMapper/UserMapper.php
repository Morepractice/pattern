<?php
namespace Tests\DesignPatterns\Structural\DataMapper;

class UserMapper
{
    /**
     * @var StorageAdapter
     */
    private $adapter;
    
    public function __construct(StorageAdapter $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * 查询
     */
    public function findById(int $id):User
    {
        $result = $this->adapter->find($id);

        if(null == $result){
            throw new \InvalidArgumentException("User $id not found");
        }

        return $this->mapRowToUser($result);
    }

    /**
     * 将查出的用户信息数组转为用户对象
     */
    public function mapRowToUser(array $row)
    {
        return User::formState($row);
    }
}