# Json Error Renderer

This is a simple package which provides a static helper class for generating errors suitable to quickly render as JSON.

To use in Laravel/Lumen applications:

in `app/Exceptions/Handler.php`:

```php
use MatthewErskine\JsonErrorRenderer\JsonErrorRenderer;

public function render($request, Exception $e)
{
    $error = JsonErrorRenderer::render($request, $e);

    return response()->json(
        $error->getPayload(),
        $error->getStatusCode()
    );
}
```
