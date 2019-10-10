<?php

namespace CanvassPaint\Blade;

class RenderFunction implements \CanvassPaint\Contract\RenderFunction
{
    /**
     * @param $data
     * @param bool $as_string
     * @return array|string
     * @throws \Throwable
     */
    public function render($data, bool $as_string = false)
    {
        /** @var \Illuminate\View\View $view */
        $view = view('canvass_paint::form.form', $data);

        if ($as_string) {
            return $view->render();
        }
        
        return $view;
    }
}
