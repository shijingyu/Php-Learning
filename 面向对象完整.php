<?php 



	class Car {

	public	$name = '汽车';

		//在类中定义的变量称之为属性，通常属性跟数据库中的字段有一定的关联，因此也可以称作“字段”。属性声明是由关键字 public，protected 或者 private 开头，后面跟一个普通的变量声明来组成。属性的变量可以设置初始化的默认值，默认值必须是常量。

// 访问控制的关键字代表的意义为：

// public：公开的
// protected：受保护的
// private：私有的
		function getName(){


			return $this->name; //方法内部可以使用$this伪变量调用对象的属性或者方法
		}
	}



$car = new Car();
echo $car->getName(); 



// <!-- 使用关键字static修饰的，称之为静态方法，静态方法不需要实例化对象，可以通过类名直接调用，操作符为双冒号::。 -->

class Car {
    public static function getName() {
        return '汽车';
    }
​}
echo Car::getName(); //结果为“汽车”









 __construct()定义一个构造函数，具有构造函数的类，会在每次对象创建的时候调用该函数，因此常用来在对象创建的时候进行一些初始化工作 -->