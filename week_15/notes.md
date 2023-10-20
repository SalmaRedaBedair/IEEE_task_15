# visibility markers
1. public: accessed by every one
2. protected: only by parent and child
3. private: only by the class it self

# magic methods (start with __)
1. contruct
2. destruct
3. call
    - called when invoking function not accessible or not found
```php
class Iphone
{
    public function __call($method, $params)
    {
        echo "The method [$method] not accessale or not found";
    }
}
$phone= new Iphone();
$phone->sayhello();
``` 
OUTPUT:
```
The method [sayhello] not accessale or not found
```
4. clone
- with colne
```php
class Iphone
{
    public $name;
    public $email;
    public function __call($method, $params)
    {
        echo "The method [$method] not accessale or not found";
    }
}
$phone= new Iphone();
$phone2=clone $phone; // creates copy
$phone->name='loma';
$phone2->name='sandy';

echo $phone->name;
echo $phone2->name;
```
OUTPUT:
```
sandysandy
```
- without colne
```php
class Iphone
{
    public $name;
    public $email;
    public function __call($method, $params)
    {
        echo "The method [$method] not accessale or not found";
    }
}
$phone= new Iphone();
$phone2=$phone; // creates copy
$phone->name='loma';
$phone2->name='sandy';

echo $phone->name;
echo $phone2->name;
```
OUTPUT:
```
lomasandy
```
# static
```php
class Iphone
{
    public static $name='loma';
    public $email;
    public static function sayHello()
    {
        echo "Hello";
    }
}
Iphone::sayHello();
ehco Ipone::$name;
```
- static or methods that are static can not be accessed using $this

```php
class Iphone
{
    public static $name='loma';
    public $email;
    public static function sayHello()
    {
        echo Iphone::$name; // it will be accessed that, not $this->name
        echo "Hello ";
    }
}
Iphone::sayHello();
echo Iphone::$name;
```
- static methods can be accessed using that, but properities can't
```php
$phone = new Iphone();
$phone->sayHello();
```
- static like declaring variable in global scope like that

```php
$x = 'loma';
```

# methods chaining
- we return $this to can access the class again and again withod using object again
```php
class salma
{
    public function loma()
    {
        echo 'lomty ';
        return $this;
    }

    public function nour()
    {
        echo 'nour ';
        return $this;
    }

    public function sandy()
    {
        echo 'sandy ';
        return $this;
    }

    public function eman()
    {
        echo 'eman ';
        return $this;
    }
}
$loma = new salma();
$loma->loma()->nour()->sandy()->eman();
```
OUTPUT:
```
lomty nour sandy eman
```
# trait
- use for multible inheritance
```php
class Iphone
{
    use MyFeature1,MyFeature2{
        MyFeature1::feature as feature1;
        MyFeature2::feature insteadof MyFeature1;
    }
}
```

# namespace
- used to seperate every world form the others

# autoload
```php
// i have classes/test.php in my folders
spl_autoload_register(function($class){
    require 'classes/'.$class.'.php';
});

$var = new test();
print_r($var);
```