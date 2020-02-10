<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $products = ['Product 01', 'Product 02', 'Product 03'];

        return $products;
    }

    public function show($id) {
        return "Exibindo o produto de id {$id}";
    }

    public function create() {
        return "Formulário para criação de novos produtos";
    }

    public function edit($id) {
        return "Editando produto {$id}";
    }

    public function store () {
        return "Cadastrando um novo usuário";
    }

    public function update ($id) {
        return "Update de file com o seguinte id: {$id}";
    }

    public function destroy($id) {
        return "Destroy the product with id: {$id}";
    }
}
