<?php
namespace Tests\DesignPatterns\Behavioral\ChainOfResponsbilities;

class HttpInMemoryCacheHandler extends Handler
{
    /**
     * @var array
     */
    private $data;

    public function __construct(array $data,Handler $handler)
    {
        parent::setHandler($handler);
        $this->data = $data;
    }

    protected function processing(RequestInterface $request)
    {
        $key = sprintf('%s?%s',
                        $request->getUri()->getPath(),
                        $request->getUri()->getQuery());

        if($request->getMethod() == 'GET' && isset($this->data[$key])){
            return $this->data[$key];
        }

        return null;
    }

}