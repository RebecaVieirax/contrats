<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class Login extends BaseController
{
    public function recuperar()
    {
        $email = $this->request->getPost('email');

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('mensagem', 'E-mail inválido.');
        }

        $usuarioModel = new UsuarioModel();
        $usuario = $usuarioModel->where('email', $email)->first();

        if (!$usuario) {
            return redirect()->back()->with('mensagem', 'E-mail não encontrado.');
        }

        $token = bin2hex(random_bytes(32));
        $expiraEm = date('Y-m-d H:i:s', strtotime('+1 hour'));

        $db = \Config\Database::connect();
        $db->table('tokens_recuperacao')->insert([
            'usuario_id' => $usuario['id'],
            'token' => $token,
            'expiracao' => $expiraEm,
        ]);

        $link = base_url("login/redefinir/$token");

        $emailService = \Config\Services::email();
        $emailService->setTo($email);
        $emailService->setSubject('Redefinição de Senha');
        $emailService->setMessage(view('emails/redefinir_senha', ['usuario' => $usuario, 'link' => $link]));

        if (!$emailService->send()) {
            echo "<h3>Erro ao enviar o e-mail:</h3>";
            echo $emailService->printDebugger(['headers', 'subject', 'body']);
            exit;
        }

        return redirect()->back()->with('mensagem', 'Um link de redefinição foi enviado para seu e-mail.');
    }

       
public function redefinir($token)
{
    $db = \Config\Database::connect();
    $registro = $db->table('tokens_recuperacao')
        ->where('token', $token)
        ->where('expiracao >=', date('Y-m-d H:i:s'))
        ->get()
        ->getRow();

    if (!$registro) {
        return "Token inválido ou expirado.";
    }

    return view('redefinir', ['token' => $token]);
}

public function atualizarSenha()
{
    $token = $this->request->getPost('token');
    $senha = $this->request->getPost('senha');
    $confirmar = $this->request->getPost('confirmar');

    if ($senha !== $confirmar) {
        return "Senhas não coincidem.";
    }

    $db = \Config\Database::connect();
    $registro = $db->table('tokens_recuperacao')
        ->where('token', $token)
        ->where('expiracao >=', date('Y-m-d H:i:s'))
        ->get()
        ->getRow();

    if (!$registro) {
        return "Token inválido ou expirado.";
    }

    $usuarioModel = new \App\Models\UsuarioModel();
    $usuarioModel->update($registro->usuario_id, [
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ]);

    // remove o token
    $db->table('tokens_recuperacao')->where('id', $registro->id)->delete();

    return "Senha atualizada com sucesso. <a href='" . base_url('login') . "'>Voltar ao login</a>";
}
public function esqueci()
{
    return view('esqueci');
}
public function index()
{
    return view('login');
}
public function verificarEmail()
{
    $email = $this->request->getPost('email');
    $usuario = (new \App\Models\UsuarioModel())->where('email', $email)->first();

    if (!$usuario) {
        return redirect()->back()->with('mensagem', 'E-mail não encontrado.');
    }

    return view('nova_senha', ['usuario_id' => $usuario['id']]);
}
public function salvarNovaSenha()
{
    $id = $this->request->getPost('usuario_id');
    $senha = $this->request->getPost('senha');
    $confirmar = $this->request->getPost('confirmar');

    if ($senha !== $confirmar) {
        return redirect()->back()->with('mensagem', 'As senhas não coincidem.');
    }

    $usuarioModel = new \App\Models\UsuarioModel();
    $usuarioModel->update($id, [
        'senha' => password_hash($senha, PASSWORD_DEFAULT)
    ]);

    return redirect()->to('/login')->with('mensagem', 'Senha atualizada com sucesso.');
}
public function cadastrar()
{
    return view('cadastro');
}
public function salvar()
{
    $usuarioModel = new \App\Models\UsuarioModel();

    $dados = [
        'nome'  => $this->request->getPost('nome'),
        'email' => $this->request->getPost('email'),
        'senha' => password_hash($this->request->getPost('senha'), PASSWORD_DEFAULT),
    ];

    // Verifica se o e-mail já existe
    if ($usuarioModel->where('email', $dados['email'])->first()) {
        return redirect()->back()->with('mensagem', 'E-mail já cadastrado.');
    }

    $usuarioModel->insert($dados);

    return redirect()->to('/login')->with('mensagem', 'Cadastro realizado com sucesso!');
}
public function autenticar()
{
    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    $usuarioModel = new \App\Models\UsuarioModel();
    $usuario = $usuarioModel->where('email', $email)->first();

    if (!$usuario || !password_verify($senha, $usuario['senha'])) {
        return redirect()->back()->with('erro', 'Usuário ou senha inválidos.');
    }

    // Autenticado: salvar na sessão
    session()->set([
        'usuario_id'   => $usuario['id'],
        'usuario_nome' => $usuario['nome'],
        'logado'       => true,
    ]);

    return redirect()->to('/painel'); // ou outra rota após login
}
public function logout()
{
    session()->destroy();
    return redirect()->to('/login');
}

}