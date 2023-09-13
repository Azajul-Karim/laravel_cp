<?php
//integer
echo 10+10;
echo "\n";
echo gettype(10);
echo "\n";
echo var_dump(10);
echo "\n";


//float
echo 10.5+10.5;
echo "\n";
echo var_dump(10.5);
echo "\n";


//string
echo "10+10";
echo "\n";
var_dump('Hello');
echo "\n";


//boolean
echo gettype(true);
echo "\n";
echo gettype(false);
echo "\n";

//null
echo gettype(null);
echo "\n";
echo var_dump(null);
echo "\n";

//array
echo var_dump(array(1,"hello",false));
echo "\n";

//object
class Animal{

}
echo var_dump(new Animal());