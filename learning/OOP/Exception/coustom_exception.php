<?php

// use Test1 as GlobalTest1;
// use Test2 as GlobalTest2;


class Test1 extends Exception{}
class Test2 extends Exception{}

function MyException2(){
    throw new Test2();
}

try{
   return MyException2();
}catch(Test1 $e){
    echo "You are right\n";
}catch(Test2 $e){
    echo "Iam Myexception2\n";
}
finally{
    echo "Function close!!!\n";
}

