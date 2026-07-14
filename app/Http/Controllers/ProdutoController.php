<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\CategoriaProduto;
use App\Models\Admin;
class ProdutoController extends Controller
{
    // Lista os produtos
    public function index()
    {
        $produtos = Produto::with(['categoria', 'admin'])->paginate(10);

        return view('produto.lista', [
            'produtos' => $produtos,
            'filtro' => ''
        ]);
    }

    // Formulário de cadastro
    public function create()
    {
         $categorias = CategoriaProduto::all();
    $admins = Admin::all();
    return view('produto.cria', compact('categorias', 'admins'));
       
    }

    // Salva um novo produto
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|max:100',
            'descricaoCurta' => 'required|max:255',
        'descricaoGeral' => 'required',
        'precoReferencia' => 'required|numeric',
        'imagem' => 'required|image|max:2048',
        'categoria_produtos_id' => 'required|exists:categoria_produtos,id',
        'admin_id' => 'required|exists:admins,id',
    ]);

    try {

        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricaoCurta = $request->descricaoCurta;
        $produto->descricaoGeral = $request->descricaoGeral;
        $produto->precoReferencia = $request->precoReferencia;
        $produto->categoria_produtos_id = $request->categoria_produtos_id;
        $produto->admin_id = $request->admin_id;

        if ($request->hasFile('imagem')) {
            $produto->imagem = $request->file('imagem')->store('produtos', 'public');
        }

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
 $categorias = CategoriaProduto::all();
        $admins = Admin::all();
            return view('produto.visualizar', compact('produto','categorias','admins'));

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
            'descricaoCurta' => 'required|max:255',
        'descricaoGeral' => 'required',
        'precoReferencia' => 'required|numeric',
        'imagem' => 'nullable|image|max:2048',
        'categoria_produtos_id' => 'required|exists:categoria_produtos,id',
        'admin_id' => 'required|exists:admins,id',
    ]);

    try {

        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricaoCurta = $request->descricaoCurta;
        $produto->descricaoGeral = $request->descricaoGeral;
        $produto->precoReferencia = $request->precoReferencia;
        $produto->categoria_produtos_id = $request->categoria_produtos_id;
        $produto->admin_id = $request->admin_id;

        // Atualiza a imagem somente se uma nova for enviada
        if ($request->hasFile('imagem')) {

            // Remove a imagem antiga (caso exista)
            if (!empty($produto->imagem) && \Storage::disk('public')->exists($produto->imagem)) {
                \Storage::disk('public')->delete($produto->imagem);
            }

            $produto->imagem = $request->file('imagem')->store('produtos', 'public');
        }

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