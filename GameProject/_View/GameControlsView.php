<?php


class GameControlsView extends BaseView
{
    public function getHtml()
    {
        $content = '';

        $content .= '<div class="container">';
        //Row 1
        $content .= '<div class="row">';
        $content .= '<div class="col-sm">';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '<button class="btn btn-primary btn-block" onclick="takeTurn(1)">Walk Up</button>';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '</div>';
        $content .= '</div>';
        //Row 2
        $content .= '<div class="row">';
        $content .= '<div class="col-sm">';
        $content .= '<button class="btn btn-primary btn-block" onclick="takeTurn(2)">Walk Left</button>';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '<button class="btn btn-primary btn-block" onclick="takeTurn(3)">Walk Right</button>';
        $content .= '</div>';
        $content .= '</div>';
        //Row 3
        $content .= '<div class="row">';
        $content .= '<div class="col-sm">';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '<button class="btn btn-primary btn-block" onclick="takeTurn(4)">Walk Down</button>';
        $content .= '</div>';
        $content .= '<div class="col-sm">';
        $content .= '</div>';
        $content .= '</div>';
        $content .= '</div>';

        return $content;
    }
}