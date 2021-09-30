
<?php 

interface ReturnMessageStrategyInterface{

  public function ReturnMessageByDay();

}

class DirecionadorDeMensagens{
  private $dia;

  function __construct(ReturnMessageStrategyInterface $dia){
    $this->dia = $dia;
  }

  public function getDiaMessage(){
      echo $this->dia->ReturnMessageByDay();
  }
}


class Segunda implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é segunda-feira!";
  }

}

class Terca implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é terca-feira!";
  }

}

class Quarta implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é quarta-feira!";
  }

}

class Quinta implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é quinta-feira!";
  }

}

class Sexta implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é sexta-feira! Dia de curtir.";
  }

}

class Sabado implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é sabado! Dia de descanço.";
  }

}

class Domingo implements ReturnMessageStrategyInterface{
  
  public function ReturnMessageByDay(){
    return "Hoje é Domingo! DIa de se preparar para a semana que se inicia.";
  }

}

class Feriado implements ReturnMessageStrategyInterface{
  
    public function ReturnMessageByDay(){
      return "Hoje é Feriado!";
    }
  
  }

$dia = new DirecionadorDeMensagens(new Domingo());
$dia->getDiaMessage();
  
?> 
