<html>
 <head>
  <title>Orders</title>
 </head>
 <body>
 <a href="index.php"><h1>Bartenders</h1></a>
 <h2>Current Orders </h2>
 <?php 
class Element{
  public $value;
  public $next;
}
class Queue{
  private $front = null;
  private $back = null; 
  
  public function isEmpty(){
    return $this->front == null;
  }
  public function enqueue($value){
     $oldBack = $this->back;
     $this->back = new Element(); 
     $this->back->value = $value;
     if($this->isEmpty()){
       $this->front = $this->back; 
     }else{
       $oldBack->next = $this->back;
     }
  }
  public function dequeue(){
    if($this->isEmpty()){
      return null; 
    }
    $removedValue = $this->front->value;
    $this->front = $this->front->next;
    return $removedValue;
  }
}
$queue = new Queue();
$queue->enqueue("2 x Pina Colada"); 
$queue->enqueue("1 x Pina Colada");
$queue->enqueue("2 x Pina Colada");
$queue->enqueue("2 x Pina Colada");
$queue->enqueue("1 x Pina Colada");
$queue->enqueue("1 x Pina Colada");
$order="1";
while(!$queue->isEmpty()){
    echo $order.". ";
    echo nl2br($queue->dequeue()."\n");
    $order = $order + 1;
}
?>

<?php

?>

 </body>
</html>