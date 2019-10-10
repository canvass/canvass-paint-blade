<?php

namespace CanvassPaint\Blade;

class RenderFunction implements \CanvassPaint\Contract\RenderFunction
{
    public function render($data)
    {
        return view('canvass_paint::form.form', $data);
    }
}
