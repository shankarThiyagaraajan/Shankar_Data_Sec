<?php

/* Product     : xDebug Doc.
 * Author      : Shankar Thiyagaraajan,
 * Description : xDebug Tools reference with examples.,
 * Mail        : shankarthiyagaraajan@gmail.com.
 */

/*
 * Init "ini_set('xdebug.var_diplay_max_children',3)" to diplay only 3 children nodes in array in "var_dump".
 */

ini_set('xdebug.var_display_max_children', -1);                   //To Display 5 sub array or child array.


/*
 * init "ini_set('xdebug.var_display_max_depth',2)" to diplay 2nd level of nested arrays.
 */

ini_set('xdebug.var_display_max_depth', -1);                      //To Display 3rd level nested arrays.


/*
 * init "xdebug.var_display_max_data",5)" to set the limit of the array element to 5.
 */

ini_set('xdebug.var_display_max_data', -1);                       //To Set the max data size as 4;

/*
 * Function "xdebug_start_code_coverage" is used to find out what are
 * the lines are executed. 
 * 
 */
xdebug_start_code_coverage();                                     //Code Coverage start here.

function foo($a) {
    return $a;
}

foo(6);
foo(1);

var_dump(xdebug_get_code_coverage());                            //Result of Code Coverage function.


/*
 * Function "xdebug_call_file()" is used to find the request come from which file.
 */

echo '<br>File Name : ' . xdebug_call_file() . '<br>';           //To Display the requested File name.


/*
 * Function "xdebug_call_class" is used to find the request come from which class.
 */


echo 'Class Name : ' . xdebug_call_class() . '<br>';             //To Display the Class name.



/*
 * Function "xdebug_call_function" is used to find the request come from which function. 
 */

echo 'Function Name : ' . xdebug_call_function() . '<br>';       //To Display the Function name.


/*
 * Function "xdebug_call_line" is used to find the request come from which line.
 */

echo 'Line : ' . xdebug_call_line() . '<br>';                    //To Display the Line number.


/*
 * Function "xdebug_get_function_stack()" is used to find out the flow or stack of the Function call.
 */

var_dump(xdebug_get_function_stack());                            //To Display the Function's call Flow or stack.

/*
 * Function "xdebug_print_function_stack()" is used to display the custom messages.
 */

xdebug_print_function_stack();                                   //To Display custom messages.


/*
 * Function "xdebug_time_index()" is used to get the time taken for execute particular function or any.
 */

xdebug_time_index();                                              //To Display the time taken for execution.



/* * **********************************************************************************************************
 * ***********************************   Sample Coding for xDebug   ******************************************
 * ********************************************************************************************************** */

class f {

    function foo($a) {
        echo '<br>Class Name : ' . xdebug_call_class() . '<br>';                    //To Display the Class name.
        echo 'Function Name : ' . xdebug_call_function() . '<br>';                  //To Display the Function name.
        echo 'Line : ' . xdebug_call_line() . '<br>';                               //To Display the Function name.
        return $a + 1;
    }

}

class n {

    function bar($b) {
        $cl = new f();
        $cl = $cl->foo($b);
    }

}

$vs = new n();
echo $vs->bar(3);

var_dump(xdebug_get_code_coverage());                    //Result of Code Coverage function.

class stack {

    function a($a) {
        $stk2 = new stack2();
        echo $stk2->c();
    }

    function b() {
        var_dump(xdebug_get_function_stack());           // Displays the function's call flow or stack.
    }

}

class stack2 {

    function c() {
        $stk = new stack();                             //Call to class "Stack"
        echo $stk->b();
    }

}

$a = '';
$stk = new stack();
$res = $stk->a($a);

xdebug_print_function_stack('Your Message');            //To Print "Your Message" text in a message.

/* Used to Findout the time taken to execute code. */

echo '<br><br>' . xdebug_time_index() . '<br>';          //Display the start time.

for ($i = 0; $i < 100; $i++) {
    // anything.
}

echo xdebug_time_index() . '<br><br>';                    //Display the end time.


