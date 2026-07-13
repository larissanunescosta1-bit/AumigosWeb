<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    // Lista os produtos
    public function index()
    {
        $produtos = Produto::paginate(10);

        return view('produto.lista', [
            'produtos' => $produtos,
            'filtro' => ''
        ]);
    }

    // Formulário de cadastro
    public function create()
    {
        return view('produto.cria');
    }

    // Salva um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'preco' => 'required',
            'descricao' => 'required',
            'categoria_produto_id' => 'required',
        ]);

        try {

            $produto = new Produto();

            $produto->nome = $request->nome;
            $produto->preco = $request->preco;
            $produto->descricao = $request->descricao;
            $produto->categoria_produto_id = $request->categoria_produto_id;

            $produto->save();

            session()->flash('msg', 'Armazenado com sucesso!');
            return redirect()->route('produto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao armazenar: ' . $e->getMessage());
            return redirect()->route('produto.create');
        }
    }

    // Visualizar produto
    public function view($id)
    {
        try {

            $produto = Produto::find($id);

            return view('produto.visualizar', [
                'produto' => $produto
            ]);

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
            return redirect()->route('produto.index');
        }
    }

    // Atualizar produto
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'preco' => 'required',
            'descricao' => 'required',
            'categoria_produto_id' => 'required',
        ]);

        try {

            $produto = Produto::find($id);

            $produto->nome = $request->nome;
            $produto->preco = $request->preco;
            $produto->descricao = $request->descricao;
            $produto->categoria_produto_id = $request->categoria_produto_id;

            $produto->save();

            session()->flash('msg', 'Atualizado com sucesso!');
            return redirect()->route('produto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao atualizar: ' . $e->getMessage());
            return redirect()->route('produto.view', $id);
        }
    }

    // Excluir produto
    public function destroy($id)
    {
        try {

            $produto = Produto::find(decrypt($id));

            $produto->delete();

            session()->flash('msg', 'Registro excluído com sucesso!');
            return redirect()->route('produto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
            return redirect()->route('produto.index');
        }
    }

    // Buscar produto
    public function search(Request $request)
    {
        $filtro = trim((string) $request->input('filtro', ''));

        $produtos = Produto::where('nome', 'like', "%{$filtro}%")
            ->orderBy('id')
            ->paginate(10);

        return view('produto.lista', [
            'produtos' => $produtos,
            'filtro' => $filtro
        ]);
    }
}