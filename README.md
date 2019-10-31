# Canvass Paint with Blade
Render Canvass forms using Laravel's Blade

*Note: This library assumes your are including it in a Laravel project.*

## Installation
Install the library via composer:
```bash
composer require canvass/canvass-paint-blade
```

## Rendering a form
Within a route or controller, instantiate a `RenderFunction` and pass it to the `RenderForm` action
```php
$action = new \CanvassPaint\Action\RenderForm(
    new \CanvassPaint\Blade\RenderFunction()
);

$html = $action->render($form_id, $owner_id);

return view('canvass::preview.form', [
    'form_html' => $html,
    'form' => $form->getForm(),
]);
```
