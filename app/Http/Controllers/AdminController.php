<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class AdminController extends Controller
{
    // Lista os administradores
    public function index()
    {
        $admins = Admin::paginate(10);

        return view('admin.lista', [
            'admins' => $admins,
            'filtro' => ''
        ]);
    }

    // Formulário de cadastro
    public function create()
    {
        return view('admin.cria');
    }

    // Salvar administrador
    public function store(Request $request)
    {
        $request->validate([
            'nome'  => 'required|max:20',
            'email' => 'required',
            'senha' => 'required',
        ]);

        try {

            $admin = new Admin();

            $admin->nome = $request->nome;
            $admin->email = $request->email;
            $admin->password = $request->senha;

            $admin->save();

            session()->flash('msg', 'Armazenado com sucesso!');
            return redirect()->route('admin.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao armazenar: ' . $e->getMessage());
            return redirect()->route('admin.create');
        }
    }

    // Visualizar administrador
    public function view($id)
    {
       try {

       $admin = Admin::find($id);  
 return view('admin.visualizar', [
            'admin' => $admin
        ]);

    } catch (\Exception $e) {

        session()->flash('erro', 'Erro ao carregar: ' . $e->getMessage());
        return redirect()->route('admin.index');
    }
    }

    // Atualizar administrador
    public function update(Request $request, $id)
    {
        $request->validate([
            'nome'  => 'required|max:20',
            'email' => 'required',
            'senha' => 'required',
        ]);

        try {

             $admin = Admin::find($id);

            $admin->nome = $request->nome;
            $admin->email = $request->email;
            $admin->password = $request->senha;

            $admin->save();

            session()->flash('msg', 'Atualizado com sucesso!');
            return redirect()->route('admin.index');

        } catch (\Exception $e) {

           session()->flash('erro', 'Erro ao atualizar: '.$e->getMessage());
        return redirect()->route('admin.view', ['id' => $id]);
        }
    }

    // Excluir administrador
    public function destroy($id)
    {
        try {

            $admin = Admin::find(decrypt($id));

            $admin->delete();

            session()->flash('msg', 'Registro excluído com sucesso!');
            return redirect()->route('admin.index');

        } catch (\Exception $e) {

            session()->flash('erro', 'Erro ao excluir: ' . $e->getMessage());
            return redirect()->route('admin.index');
        }
    }

    // Pesquisar administrador
    public function search(Request $request)
    {
        $filtro = trim((string) $request->input('filtro', ''));

        $admins = Admin::where('nome', 'like', "%{$filtro}%")
            ->orderBy('id')
            ->paginate(10);

        return view('admin.lista', [
            'admins' => $admins,
            'filtro' => $filtro
        ]);
    }
}