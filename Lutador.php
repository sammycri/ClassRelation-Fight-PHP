<?php

class Lutador {
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //metodos
    
    public function apresentar()
    {   
        echo "<br/>------------------------------------------------<br/>";
        echo "---------------CHEGOU A HORA -------------------<br/>";
        echo "--------------A LUTA MAIS ESPERADA!!!!-----------";
        echo "<p><br/>Nome do lutador: " . $this->getNome() . ", de " . $this->getNacionalidade();
        echo " com " . $this->getIdade() . " anos e " . $this->getPeso() . " kg. <br/> ";
        echo "<br/>Vitorias: " . $this->getVitorias();
        echo "<br/>Derrotas: " . $this->getDerrotas();
        echo "<br/>Empates: " . $this->getEmpates();
        echo "</p>------------------------------------------------";
    }
    
    public function status()
    {
        echo "<br/>------------------------------------------------";
        echo "<br/><p>" . $this->nome . " é um peso: " . $this->getCategoria();
        echo "<br/>Vitorias: " . $this->getVitorias();
        echo "<br/>Derrotas: " . $this->getDerrotas();
        echo "<br/>Empates: " . $this->getEmpates();
        echo "<br/>------------------------------------------------";
    }
    
    public function ganharLuta()
    {
        $this -> setVitorias($this-> getVitorias() + 1);
    }
    
    public function perderLuta()
    {
            $this -> setDerrotas($this-> getDerrotas() + 1);
    }
     public function empatarLuta()
     {
         $this -> setEmpates($this->getEmpates() + 1);
     }
    //Construtor
     
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->nome = $nome;
        $this->nacionalidade = $nacionalidade;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->setPeso($peso);
        $this->vitorias = $vitorias;
        $this->derrotas = $derrotas;
        $this->empates = $empates;
    }

    
    
    // getters e setters 
    
    public function getNome() 
    {
        return $this->nome;
    }

    public function getNacionalidade() 
    {
        return $this->nacionalidade;
    }

    public function getIdade() 
    {
        return $this->idade;
    }

    public function getAltura() 
    {
        return $this->altura;
    }

    public function getPeso() 
    {
        return $this->peso;
    }

    public function getCategoria() 
    {
        return $this->categoria;
    }

    public function getVitorias() 
    {
        return $this->vitorias;
    }

    public function getDerrotas() 
    {
        return $this->derrotas;
    }

    public function getEmpates() 
    {
        return $this->empates;
    }

    public function setNome($nome): void 
    {
        $this->nome = $nome;
    }

    public function setNacionalidade($nacionalidade): void 
    {
        $this->nacionalidade = $nacionalidade;
    }

    public function setIdade($idade): void 
    {
        $this->idade = $idade;
    }

    public function setAltura($altura): void 
    {
        $this->altura = $altura;
    }

    public function setPeso($peso): void 
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    public function setCategoria(): void 
    {
        if ($this->peso < 52.2)
        {
            $this->categoria = "Inválido";
        }
        elseif ($this->peso <= 70.3)
        {
            $this->categoria = "Leve";
        }
        elseif ($this->peso <= 83.9)
        {
            $this->categoria = "Médio";
        }
        elseif ($this->peso <= 120.2) 
        {
            $this->categoria = "Pesado";
        }
        else 
        {
            $this->categoria = "Inválido";
        }
    }

    public function setVitorias($vitorias): void 
    {
        $this->vitorias = $vitorias;
    }

    public function setDerrotas($derrotas): void 
    {
        $this->derrotas = $derrotas;
    }

    public function setEmpates($empates): void 
    {
        $this->empates = $empates;
    }


    
}
