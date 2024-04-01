<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LocalSistema extends Component
{
    public $titulo;
    public $descricao;
    public $url;
    public $nomeurl;
    /**
     * Create a new component instance.
     */
    public function __construct($titulo, $descricao, $url, $nomeurl)
    {
        //
        $this->titulo = $titulo;
        $this->descricao = $descricao;
        $this->url = $url;
        $this->nomeurl = $nomeurl;

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.local-sistema');
    }
}
