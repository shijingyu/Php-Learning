<?php 

#创建类具有的属性:

class classname
{

	public $attribute1; //创建具有的属性 关键字： public(公共的) private(私有的) protected(受保护的)
	public $attribute2;

}




#通过声明函数，就是对类的操作
class classname
{

	function operation1()
	{

	}
	function operation2($param1,$param2)    //通过声明函数，就是对类的操作
	{

	}

}




class classname
{


	function _construct($param)  //构造函数   construct(建造, 构成)
	{
		echo "Constructor called with parameter" .$param."<br/>"

	}

}

//析构函数   _destruct (破坏)


//类的实例化，创建一个对象：

class classname
{
	function _construct($param)
{

	echo "Constructor called with parameter " .$param. "<br/>"
}

}

$a = new classname("First");
$b = new classname("second");
$c = new classname();

#名为classname的类，创建了三个classname类型的对象


#使用，访问 类的属性：

class classname
{
	public $attribute;
	function operation($param)
	{
		$this -> attribute = $param   //把函数的参数param赋值给类的属性attribute
		echo $this -> attribute;	//访问属性

	}


}



#从类外部访问属性：

class classname
{

	public $attribute;
}

$a = new classname();
$a -> attribute = "value";
echo $a -> attribute;



#类的继承: 

class B extends A 
{

	public $attribute2;
	function operation2()
	{

	}

}

class A
{

	public $attribute1;
	function operation1()
	{

	}
}


#下面所有对类B对象的操作和属性的访问都是有效的：

$b = new B();
$b -> operation1();
$b -> attribute1 = 10;
$b -> operation2();
$b -> attribute2 = 10;

#继承是单方向的。子类可以从父类或超类继承特性，或父类却不能从子类继承特性。也就是说下面的是错误的：

$a -> operation2();
$a -> attribute2 = 10;











 ?>