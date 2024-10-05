<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task 
{
    public static function list()
    {
        return collect([
            (object)['descricao' => 'Venda de Serviços', 'valor' => 2500, 'tipo' => 'A receber'],
            (object)['descricao' => 'Compra de Equipamentos', 'valor' => 1200, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Manutenção', 'valor' => 350, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Fatura de Cartão', 'valor' => 900, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Licenciamento de Software', 'valor' => 400, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Pagamento de Cliente', 'valor' => 1800, 'tipo' => 'A receber'],
            (object)['descricao' => 'Bonificação', 'valor' => 600, 'tipo' => 'A receber'],
            (object)['descricao' => 'Material de Escritório', 'valor' => 250, 'tipo' => 'A pagar'],
            (object)['descricao' => 'Reembolso', 'valor' => 450, 'tipo' => 'A receber'],
            (object)['descricao' => 'Consultoria Externa', 'valor' => 1500, 'tipo' => 'A pagar'],
        ]);
    }        
}
