<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register
{
    public static function list()
    {
        return [
            (object) ['nome' => 'Gabriel Rocha', 'cargo' => 'Diretor', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Larissa Pereira', 'cargo' => 'Coordenadora', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Rafael Almeida', 'cargo' => 'Consultor', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Isabela Ribeiro', 'cargo' => 'Auxiliar Administrativo', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Fernando Carvalho', 'cargo' => 'Engenheiro', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Beatriz Lima', 'cargo' => 'Marketing', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Thiago Silva', 'cargo' => 'Operador de Máquina', 'escolaridade' => 'Técnico'],
            (object) ['nome' => 'Patrícia Mendes', 'cargo' => 'Secretária', 'escolaridade' => 'Médio'],
            (object) ['nome' => 'Eduardo Nunes', 'cargo' => 'Gestor de Projetos', 'escolaridade' => 'Superior'],
            (object) ['nome' => 'Vanessa Barros', 'cargo' => 'Consultora de Vendas', 'escolaridade' => 'Médio'],
        ];        
    }
}
