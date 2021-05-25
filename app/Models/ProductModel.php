<?php 
namespace App\Models;
use CodeIgniter\Model;
 
class ProductModel extends Model
{
    protected $table = 'product';
    protected $allowedFields=['product_name','product_description'];
     
    public function getProduct($id = false)
    {
        if($id === false){
            return $this->findAll();
        }else{
            return $this->getWhere(['product_id' => $id]);
        }   
    }
 
}