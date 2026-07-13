<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriaProduto;

class CategoriaProdutoController extends Controller
{
    // Lista
    public function index()
    {
        $categorias = CategoriaProduto::paginate(10);

        return view('categoriaProduto.lista', [
            'categorias' => $categorias,
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

            $categoria = new CategoriaProduto();

            $categoria->nome = $request->nome;

            $categoria->save();

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

            $categoria = CategoriaProduto::find($id);

            return view('categoriaProduto.visualizar', [
                'categoria' => $categoria
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

            $categoria = CategoriaProduto::find($id);

            $categoria->nome = $request->nome;

            $categoria->save();

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

            $categoria = CategoriaProduto::find(decrypt($id));

            $categoria->delete();

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

        $categorias = CategoriaProduto::where('nome', 'like', "%{$filtro}%")
            ->orderBy('id')
            ->paginate(10);

        return view('categoriaProduto.lista', [
            'categorias' => $categorias,
            'filtro' => $filtro
        ]);
    }
}