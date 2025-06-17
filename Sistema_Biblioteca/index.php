<?php


class livro {
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel = true;
    private $leitorAtual;

    public function __construct($titulo, $autor, $anoPublicacao, $disponivel = true) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = $disponivel; 
    }
    
    public function setDisponivel($disponivel) {
        $this->disponivel = $disponivel;
    }
    
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    public function setAutor($autor) {
        $this->autor = $autor;
    }
    
    public function setAnoPublicacao($anoPublicacao) {
        $this->anoPublicacao = $anoPublicacao;
    }
    
    public function getTitulo() {
        return $this->titulo;
    }
    

    public function getAutor() {
        return $this->autor;
    }
   

    public function getAnoPublicacao() {
        return $this->anoPublicacao;
    }
   

    public function getDisponivel() {
        return $this->disponivel;
    }
    

    public function exibirInformacoes() {
        return "Título: " . $this->titulo . "<br>Autor: " . $this->autor . "<br>Ano de Publicação: " . $this->anoPublicacao . "<br>Disponível: " . ($this->disponivel ? "Sim<br><br>" : "Não<br><br>");
    }

    public function emprestar($leitor) {
        if ($this->disponivel) {
            $this->disponivel = false;
            $this->leitorAtual = $leitor->getNome() . "<br><br>";
            return "Livro emprestado para " . $this->leitorAtual;
        }
    }

    public function devolver() {
        $this->disponivel = true;
        $this->leitorAtual = "Livro devolvido.<br><br><br>";
    }

    public function estaDisponivel() {
        return "Disponível:" . ($this->disponivel ? "Sim<br><br>" : "Não<br><br>");
    }

    public function quemPegou($leitor = null) {
        if ($leitor !== null) {
            $this->leitorAtual = $leitor->getNome() . "<br><br>";
            return "Leitor atual: " . $this->leitorAtual;
        } elseif ($this->leitorAtual) {
            return "Leitor atual: " . $this->leitorAtual;
        } else {
            return "Nenhum leitor pegou este livro.<br><br>";
        }
    }
}   


class leitor{
    private $nome;
    private $email;
    private $telefone;
    
    public function __construct($nome, $email, $telefone) {
        $this->nome = $nome;
        $this->email = $email;
        $this->telefone = $telefone;
    }
    public function setEmail($email) {
        $this->email = $email;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }
    public function getNome() {
        return $this->nome;
    }
    public function getEmail() {
        return $this->email;
    }
    public function getTelefone() {
        return $this->telefone;
    }
    public function exibirLeitor() {
        return "Nome: " . $this->nome . "<br>Email: " . $this->email . "<br>Telefone: " . $this->telefone . "<br><br>";
    }
}


class biblioteca{
    private $nomeBiblioteca;
    private $livros = [];
    private $leitores = [];

    public function __construct($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function getNomeBiblioteca() {
        return $this->nomeBiblioteca;
    }

    public function setNomeBiblioteca($nomeBiblioteca) {
        $this->nomeBiblioteca = $nomeBiblioteca;
    }

    public function adicionarLivro($livro) {
        $this->livros[] = $livro;
    }

    public function adicionarLeitor($leitor) {
        $this->leitores[] = $leitor;
    }

    public function listarLivros() {
        foreach ($this->livros as $livro) {
            echo $livro->exibirInformacoes();
        }
    }

    public function listarLeitores() {
        foreach ($this->leitores as $leitor) {
            echo $leitor->exibirLeitor();
        }
    }
}
// Exemplo de uso
$biblioteca = new biblioteca("Biblioteca Central");
$biblioteca->adicionarLivro(new livro("Dom Casmurro", "Machado de Assis", 1899));
$biblioteca->adicionarLivro(new livro("O Guarani", "José de Alencar", 1857));
$biblioteca->adicionarLivro(new livro("Memórias Póstumas de Brás Cubas", "Machado de Assis", 1881));
$biblioteca->adicionarLeitor(new leitor("João Silva", "aluno@aluno.iffar.edu.br", "99999-9999"));
$biblioteca->adicionarLeitor(new leitor("Maria Oliveira", "aluna@aluno.iffar.edu.br", "88888-8888"));
$biblioteca->listarLivros();
$biblioteca->listarLeitores();

//feito por Henrique Kuhn De Abreu

?>