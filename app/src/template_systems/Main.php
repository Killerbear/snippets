<?php

namespace snippets\template_systems;

class Main
{

    public function __construct()
    {

        $title          = 'Hallo Welt';
        $text           = 'Eine Welt voller Missverstädnisse';
        $image['url']   = 'https://www.example.com/image.png';
        $image['alt']   = 'image';
        $image['title'] = 'image title';


        // übergabestruktur (key-val-pair)
        $tpl_data = [
            'title'       => $title,
            'text'        => $text,
            'image_url'   => $image['url'],
            'image_alt'   => $image['alt'],
            'image_title' => $image['title'],
        ];




        // Template mit Platzhaltern (Asoziationen)
        $template_part =
            <<<HTML
<div id="TEST" class="flex justify-between align-center">
    <div>
        <h1>{{title}}</h1>
        <div class="border-l border-gray-400 pl-8 mt-4 text-lg">
            <p>{{text}}</p>
        </div>
    </div>
    <img src="{{image_url}}" alt="{{image_alt}}" title="{{image_title}}" />
</div>

HTML;


        $tpl_system = new TplSystemAssoc($template_part,$tpl_data);
        echo $tpl_system->get();

    }

}