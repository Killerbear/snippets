<?php

namespace snippets\template_systems;

class TplSystemAssoc
{

    private string $tpl;
    private array  $data;



    /**
     * @param string $tpl HTML-Data
     * @param array $data key-val-pair
     */
    public function __construct(string $tpl, array $data)
    {
        $this->tpl  = $tpl;
        $this->data = $data;
    }



    /**
     * @return void
     */
    private function render(): void
    {
        // alle Daten durchgehen
        foreach ($this->data as $key => $val) {
            $this->tpl = str_replace(
                "{{{$key}}}",
                htmlentities($val),
                $this->tpl
            );
        }
    }



    /**
     * @return string get rendered template
     */
    public function get(): string
    {
        $this->render();
        return $this->tpl;
    }

}