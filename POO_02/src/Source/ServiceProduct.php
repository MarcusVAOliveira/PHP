<?php

namespace Source;

Class ServiceProduct implements IServiceProduct
{
  private $db;
  private $product;

  public function __construct(IConn $db,IProduct $product){
    $this->db = $db->connect();
    $this->product = $product;
  }

  public function list(){
    $query = "SELECT * FROM products";

    $stmt = $this->db->prepare($query);

    $stmt->execute();

    return $stmt->fetchAll(\PDO::FETCH_ASSOC);
  }

  public function save(){

  }

  public function update(){

  }

  public function delete(){

  }

}
