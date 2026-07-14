<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaProduto;

class CategoriaProdutoController extends Controller
{
    // Lista
    public function index()
    {
        $categoriaProdutos = CategoriaProduto::paginate(10);

        return view('categoriaProduto.lista', [
             'categoriaProdutos' => $categoriaProdutos,
            'filtro' => ''
        ]);
    }

    // Tela de cadastro
    public function create()
    {
        return view('categoriaProduto.cria');
    }

    // Salvar
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
        ]);

        try {

            $categoriaProduto = new CategoriaProduto();

            $categoriaProduto->nome = $request->nome;
             $categoriaProduto->descricao = $request->descricao;

            $categoriaProduto->save();

            session()->flash('msg', 'Armazenado com sucesso!');
            return redirect()->route('categoriaProduto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao armazenar: ' . $e->getMessage());
            return redirect()->route('categoriaProduto.create');
        }
    }

    // Visualizar
    public function view($id)
    {
        try {

            $categoriaProduto = CategoriaProduto::find($id);

            return view('categoriaProduto.visualizar', [
                'categoriaProduto' => $categoriaProduto
            ]);

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
            return redirect()->route('categoriaProduto.index');
        }
    }

    // Atualizar
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|max:100',
        ]);

        try {

            $categoriaProduto = CategoriaProduto::find($id);

            $categoriaProduto->nome = $request->nome;
            $categoriaProduto->descricao = $request->descricao;

            $categoriaProduto->save();

            session()->flash('msg', 'Atualizado com sucesso!');
            return redirect()->route('categoriaProduto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao atualizar: ' . $e->getMessage());
            return redirect()->route('categoriaProduto.view', $id);
        }
    }

    // Excluir
    public function destroy($id)
    {
        try {

            $categoriaProduto = CategoriaProduto::find(decrypt($id));

            $categoriaProduto->delete();

            session()->flash('msg', 'Registro excluído com sucesso!');
            return redirect()->route('categoriaProduto.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
            return redirect()->route('categoriaProduto.index');
        }
    }

    // Buscar
    public function search(Request $request)
    {
        $filtro = trim((string) $request->input('filtro', ''));

        $categoriaProdutos = CategoriaProduto::where('nome', 'like', "%{$filtro}%")
    ->orderBy('id')
    ->paginate(10);

return view('categoriaProduto.lista', [
    'categoriaProdutos' => $categoriaProdutos,
    'filtro' => $filtro
]);
       
    }
}