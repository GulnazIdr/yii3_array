<?php
namespace app\models;

use PDO;
use Yii;
use yii\base\Model;

class Price extends Model{
    public $name ;
    public $price;
    public $description;
    public $priceList = array();

    public function setName($new){
        $this->name = $new;
    }

    public function setPrice($new){
        $this->price = $new;
    }

    public function setDescr($new){
        $this->description = $new;
    }

    public function addNewPrice() {
        $new_price =  new self([
            'name' => $this->name, 
            'price' => $this->price, 
            'description' => $this->description
        ]);
        array_push($this->priceList, $new_price);
    }

    public function getPriceList(){  
        $list = [
            new self(['name' => 'Куртка', 'price' => 100, 'description' => "описание1"]),
            new self(['name' => 'Книга', 'price' => 200, 'description' => "описание2"]),
            new self(['name' =>'Сапоги', 'price' => 300, 'description' => "описание3"]),
        ];
        return $list;
    }

    public function rules()
    {
        return [
            [['name', 'price'], 'required'],
            [['name', 'description'], 'string', 'max' => 255],
            [['description'], 'default', 'value' => ""],
        ];
    }
}
?>