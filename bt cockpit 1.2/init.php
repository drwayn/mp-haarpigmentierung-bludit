<?php
class ThemeInit extends Theme {
    public function init() {
        $this->dbFields = [
            'customCSS' => '',
            'customJS'  => ''
        ];
    }
    public function form() {
        $html  = '<div>';
        $html .= '<label>Eigenes CSS:</label>';
        $html .= '<textarea name="customCSS">' . $this->getValue('customCSS') . '</textarea>';
        $html .= '</div>';
        $html .= '<div>';
        $html .= '<label>Eigenes JavaScript:</label>';
        $html .= '<textarea name="customJS">' . $this->getValue('customJS') . '</textarea>';
        $html .= '</div>';
        return $html;
    }
}