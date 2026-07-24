<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Lista os administradores
    public function index()
    {
       $admins = User::paginate(10);

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
            'name'  => 'required|max:20',
            'email' => 'required',
            'password' => 'required',
        ]);

        try {

            $admin = new User();

            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->password = Hash::make($request->password);

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

       $admin = User::find($id);  
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
            'name'  => 'required|max:20',
            'email' => 'required',
            'password' => 'required',
        ]);

        try {

             $admin = User::find($id);

            $admin->name = $request->name;
            $admin->email = $request->email;
             $admin->password = Hash::make($request->password);

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

            $admin = User::find(decrypt($id));

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

        $admins = User::where('nome', 'like', "%{$filtro}%")
            ->orderBy('id')
            ->paginate(10);

        return view('admin.lista', [
            'admins' => $admins,
            'filtro' => $filtro
        ]);
    }
}