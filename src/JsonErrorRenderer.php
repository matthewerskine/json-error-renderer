<?php

namespace MatthewErskine\JsonErrorRenderer;

class JsonErrorRenderer
{
    /**
     * Renders JSON errors.
     *
     * @param  mixed $request
     * @param  \Exception $exception
     * @return \MatthewErskine\JsonErrorRenderer\JsonError
     */
    public static function render($request, $exception)
    {
        $statusCode = 500;

        if (method_exists($exception, 'getStatusCode')) {
            $statusCode = $exception->getStatusCode();
        }

        return new JsonError([
            'exception' => get_class($exception),
            'message' => $exception->getMessage()
        ], $statusCode);
    }
}
