<?php
//TODO 构造 析构
//__construct 构造 实例化自动执行
//__destruct 析构 销毁(或者unset)前执行

//TODO 类常量
//const 不用$ 不可以修改
//内部调用 todo self::XX
//外部调用 todo 类名::XX

//TODO 属性
//public 公共的
//private 私有的
//protected 受保护的

//TODO 继承
//extends 继承类

//TODO 父类关键字
//parent
//调用父类方法 todo parent::xx

//final 类不被继承 方法不被重写
//this self(调用类的常量)


//总结：类中可以定义的成员有：常量、静态属性、非静态属性、静态方法、非静态方法。
//
//此处需要注意：
//$this 表示当前对象，那么他永远表示$this所在类的对象么？
//答案是否定的！因为$this的值，不取决于$this所在的类，而是取决于$this所在方法被调用时的执行对象（执行环境）
//
//方法的执行环境，当前方法是在哪个对象的环境下执行，该方法内的$this就表示哪个对象。
const NO = 1;
class Computer{
    public function __construct()
    {
        echo "..开始";
        echo "<br/>";
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        echo "..结束";
        echo "<br/>";
    }

    const YES = true;
    const NO = false;

    const ONE = 1;
    const TWO = self::ONE + 1;
    const THREE = self::TWO + 1;

    public $abc = "123";
    public function abc(){
        return self::TWO;
    }

}
$obj = new Computer;  //实例化
echo $obj->abc()."<br/>";
unset($obj);    //销毁
echo Computer::ONE;

