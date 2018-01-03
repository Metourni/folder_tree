<?php
/**
 * Created by PhpStorm.
 * User: Noureddine
 * Date: 03/01/2018
 * Time: 22:15
 */

class TreeView
{

    public function arrayToListView($datas)
    {
        $html = '';
        foreach ($datas as $data) {
            if (is_array($data)) {

                $html .=
                    '<li>' . $data[0] .
                    '<ul>'
                    . $this->arrayToListView($data[1]) .
                    '</ul>
                    </li>';
            } else {
                $html .= '<li class="file-tree" data-jstree=\'{"icon":"assets/images/Docs-icon.png"}\'>';
                $html .= $data;
                $html .= '</li>';
            }
        }

        return $html;
    }
}