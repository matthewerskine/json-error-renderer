<?php

namespace MatthewErskine\JsonErrorRenderer;

class JsonError
{
    /**
     * The payload of the error.
     *
     * @var array
     */
    protected $payload;

    /**
     * The HTTP status code for the error.
     *
     * @var integer
     */
    protected $statusCode = 500;

    /**
     * Called when the class should load.
     *
     * @param array $payload
     * @param integer $statusCode
     */
    public function __construct($payload, $statusCode = 500)
    {
        $this->payload = $payload;
        $this->statusCode = $statusCode;
    }

    /**
     * Gets the payload.
     *
     * @return array
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Sets the payload.
     *
     * @param array $payload
     * @return self
     */
    public function setPayload(array $payload)
    {
        $this->payload = $payload;

        return $this;
    }

    /**
     * Gets the status code.
     *
     * @return integer
     */
    public function getStatusCode()
    {
        return $this->statusCode;
    }

    /**
     * Sets the status code.
     *
     * @param integer $statusCode
     * @return self
     */
    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }
}
