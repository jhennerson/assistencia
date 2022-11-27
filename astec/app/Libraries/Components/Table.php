<?php

namespace App\Libraries\Components;
use App\Models\UserModel;

/*
 * Gera i,a tabela dinâmica
 */
 
 class Table {
    private $header;
    private $body;
    private $link;

    function __construct(array $header, array $body, string $link) {
        $this->header = $header;
        $this->body = $body;
        $this->link = $link;
    }

    public function getHTML() {
        $html = '<table class="table">';
        $html .= $this->tableHeader();
        $html .= $this->tableBody();
        $html .= '</table>';
        return $html;
    }

    private function tableHeader() {
        $html = '<thead><tr>';             
        foreach ($this->header as $item) {
            $html .= '<th scope=\"col\">'.$item.'</th>';
        }        
        $html .= '</tr></thead>';
        return $html;
    }

    private function tableBody() {
        $link = $this->link;
        $html = '<tbody>';
        foreach ($this->body as $row) {
            $html .= $this->tableRow($row, $link);
        }
        $html .= '</tbody>';
        return $html;
    }

    private function tableRow($row, $link) {
        $html = '<tr>';
        foreach ($row as $item) {
            $html .= '<td class="align-middle">'.$item.'</td>';
        }

        $html .=
            '<td class="align-middle">
                <a href="/'.$link.'/'.$row['id'].'/edit" dusk="edit'.$row['id'].'" class="btn btn-info edit-btn">Editar</a>
            </td>
            <td class="align-middle">
                <a href="/'.$link.'/'.$row['id'].'/delete" dusk="delete'.$row['id'].'" class="delete_form" method="GET">
                    <input type="hidden" name="_token" value="'.csrf_token().'" /> 
                    <input type="hidden" name="_method" value="DELETE" />
                    <button type="submit" class="btn btn-danger delete-btn" name="trash-outline">Remover</button>
                </a>
            </td>';
        $html .= '</tr>';
        
        return $html;
    }
 }