<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\CategoriaProduto;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class ProdutoController extends Controller
{
    // Lista os produtos
    public function index()
    {
        $produtos = Produto::with(['categoria', 'user'])->paginate(10);

        return view('produto.lista', [
            'produtos' => $produtos,
            'filtro' => ''
        ]);
    }

    // Formulário de cadastro
    public function create()
    {
         $categorias = CategoriaProduto::all();
    $admins = User::all();
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
        'user_id' => 'required|exists:users,id',
    ]);

    try {

        $produto = new Produto();

        $produto->nome = $request->nome;
        $produto->descricaoCurta = $request->descricaoCurta;
        $produto->descricaoGeral = $request->descricaoGeral;
        $produto->precoReferencia = $request->precoReferencia;
        $produto->categoria_produtos_id = $request->categoria_produtos_id;
        $produto->user_id = $request->user_id;
        // salva automaticamente o admin que esta  logado
        $produto->user_id = Auth::id();

       if ($request->hasFile('imagem')) {
    $imagem = $request->file('imagem')->storeOnCloudinary('produtos');
    $produto->imagem = $imagem->getSecurePath();
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
               // so o id 1 ou o quem criou o  produto pode editar
        if (Auth::id() != 1 && $produto->user_id != Auth::id()) {
            return redirect()->route('produto.index');
        }
 $categorias = CategoriaProduto::all();
        $admins = User::all();
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
        'user_id' => 'required|exists:users,id',
    ]);

    try {

        $produto = Produto::find($id);

        $produto->nome = $request->nome;
        $produto->descricaoCurta = $request->descricaoCurta;
        $produto->descricaoGeral = $request->descricaoGeral;
        $produto->precoReferencia = $request->precoReferencia;
        $produto->categoria_produtos_id = $request->categoria_produtos_id;
        $produto->user_id = $request->user_id;


        if (Auth::id() != 1 && $produto->user_id != Auth::id()) {
    return redirect()->route('produto.index');
}
        // Atualiza a imagem somente se uma nova for enviada
        if ($request->hasFile('imagem')) {
    $imagem = $request->file('imagem')->storeOnCloudinary('produtos');

    $produto->imagem = $imagem->getSecurePath();
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

             // So o id 1 ou o riou o  produto pode excluir
        if (Auth::id() != 1 && $produto->user_id != Auth::id()) {
            return redirect()->route('produto.index');
        }

         
// A imagem está no Cloudinary, então não apagar pelo armazenamento local.

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


    public function categoria($id)
{
    $categorias = CategoriaProduto::all();

    $produtos = Produto::where('categoria_produtos_id', $id)
        ->with('categoria')
        ->get();

    return view('index', compact('produtos', 'categorias'));
}


}