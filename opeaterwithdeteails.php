<?php
/* OPERATORS */

// Operator:
// Kisi bhi symbol jis ke zariye koi operation ya logic apply ho rahi ho
// PHP mein 8 type ke operators hain

/* Type of Operators */

1. Arithmetic Operators: +, -, *, /, %
   - Addition (+), Subtraction (-), Multiplication (*), Division (/), Modulus (%)

2. Increment Operator: ++
   - Post Increment (a++): Pehle value use, phir increment
   - Pre Increment (++a): Pehle increment, phir value use

3. Decrement Operator: --
   - Post Decrement (a--): Pehle value use, phir decrement
   - Pre Decrement (--a): Pehle decrement, phir value use

4. Assignment Operator: =
   - Value ko variable mein assign karta hai

5. Arithmetic Assignment Operators: +=, -=, *=, /=, %=
   - Shorthand operators for arithmetic operations

6. Comparison/Relational Operators: <, >, <=, >=, <=>, ==, ===, !=, !==
   - Less than, Greater than, Spaceship operator, Equal to, Identical, Not equal

7. Logical Operators: OR (||), AND (&&), NOT (!)
   - Boolean operations ke liye use hote hain

8. String Operator: .=
   - String concatenation ke liye
   - Dot operator (.) bhi strings join karta hai


/* CONDITIONAL STATEMENTS */

1. if statement
   - Ek condition check karta hai

2. if-elseif-else statement
   - Multiple conditions check karne ke liye

3. switch statement
   - Ek variable ki multiple values check karne ke liye
   - Case-break structure use hota hai


/* LOOPS */

1. for loop
   - Jab iterations ki exact count pata ho
   - Syntax: for(initialization; condition; increment/decrement)

2. while loop
   - Jab tak condition true hai, tab tak chalta hai
   - Condition pehle check hoti hai

3. do-while loop
   - Kam se kam ek bar zaroor chalta hai
   - Condition baad mein check hoti hai

4. foreach loop ⭐ (ADDED - FULL DETAIL)
   - Arrays ko traverse karne ke liye use hota hai
   - Jab hume array ke har element par kaam karna ho

   Syntax:
   foreach ($array as $value) {
       // code
   }

   Key-value form:
   foreach ($array as $key => $value) {
       // code
   }


/* GOTO STATEMENT */

goto statement is used to jump on a specific line of code
- Label define karo aur goto se us label par jump karo
- Modern programming mein avoid kiya jata hai


/* FUNCTIONS */

Function: A function is a block of code that is used to perform a specific task.
A function is a reusable code.

/* Types of Functions */

1. User-Defined Functions
   - Jo programmer khud banata hai

2. Built-in/Pre-defined Functions
   - Jo PHP mein pehle se mojood hain (strlen, count, etc.)


/* Function Categories */

- Simple Function
  - Bina parameter, bina return value
  - Bas ek specific task perform karta hai

- Returning Function
  - Return keyword se value wapas karta hai
  - Calculation ya processing ke baad result deta hai

- Parameterized Function
  - Arguments/parameters accept karta hai
  - Input values ke basis par kaam karta hai

- Anonymous Function
  - Bina naam ka function
  - Variable mein store hota hai ya callback mein use hota hai
  - Lambda function bhi kehte hain

- Variable Function
  - Function ka naam variable mein store karke call karna
  - Dynamic function calling ke liye


/* ARRAYS */

Array: Ek variable mein multiple values store karne ke liye

Types of Arrays:
1. Indexed Array
   - Numeric index (0, 1, 2...) se access
   - Example: $colors = array("Red", "Green", "Blue");

2. Associative Array
   - Key-value pairs
   - Example: $student = array("name" => "Ahmed", "age" => 20);

3. Multidimensional Array
   - Array ke andar array
   - 2D, 3D arrays ban sakte hain

Array Functions:
- count(), array_push(), array_pop(), sort(), array_merge(), in_array(), etc.


/* STRINGS */

String: Text data store karne ke liye

String Functions:
- strlen(): String ki length
- strtoupper(): Uppercase mein convert
- strtolower(): Lowercase mein convert
- substr(): String ka part extract
- str_replace(): Find and replace
- trim(): Extra spaces hatana
- explode(): String ko array mein convert
- implode(): Array ko string mein convert


/* SUPERGLOBALS */

PHP ke pre-defined global variables jo har jagah accessible hain:

1. $_GET - URL parameters se data lena
2. $_POST - Form data (POST method) se lena
3. $_REQUEST - GET, POST, aur COOKIE data
4. $_SESSION - User session data store karna
5. $_COOKIE - Browser mein data store karna
6. $_SERVER - Server aur environment information
7. $_FILES - File upload handle karna
8. $GLOBALS - Sab global variables ko access


/* INCLUDE & REQUIRE */

Dusri PHP files ko current file mein add karna:

- include: File ko add karta hai, agar file na mile to warning deta hai
- require: File ko add karta hai, agar file na mile to fatal error (script stop)
- include_once: File ko sirf ek bar include
- require_once: File ko sirf ek bar require


/* FILE HANDLING */

Files ke sath kaam karna:

- fopen(): File open karna (modes: r, w, a, r+, w+, a+)
- fwrite(): File mein likhna
- fread(): File se parhna
- fclose(): File close karna
- file_get_contents(): Puri file read karna
- file_put_contents(): File mein content likhna
- unlink(): File delete karna
- file_exists(): Check karna file exist karti hai ya nahi


/* CLASSES & OBJECTS (OOP) */

Object-Oriented Programming:

- Class: Blueprint/template for creating objects
- Object: Class ka instance
- Properties: Class ke variables
- Methods: Class ke functions
- Constructor (__construct): Object create hote waqt automatically call
- Destructor (__destruct): Object destroy hote waqt call

OOP Concepts:
1. Encapsulation: Data hiding
2. Inheritance: Parent class se properties lena
3. Polymorphism: Ek naam, multiple forms
4. Abstraction: Implementation details hide karna

Access Modifiers:
- public: Har jagah accessible
- private: Sirf class ke andar accessible
- protected: Class aur child classes mein accessible


/* ERROR HANDLING */

Errors ko handle karna:

- try-catch block: Exceptions handle karne ke liye
- throw: Manually exception throw karna
- finally: Har haal mein execute hoga
- Custom error handlers: set_error_handler()


/* DATABASE CONNECTION */

MySQL database ke sath kaam:

1. MySQLi (MySQL Improved):
   - mysqli_connect(): Connection banana
   - mysqli_query(): Query execute karna
   - mysqli_fetch_assoc(): Data fetch karna
   - mysqli_close(): Connection close karna

2. PDO (PHP Data Objects):
   - Better security (prepared statements)
   - Multiple databases support
   - Object-oriented approach


/* FORM HANDLING & VALIDATION */

Forms se data lena aur validate karna:

- $_POST/$_GET se data access
- empty(): Check karna field khali hai
- isset(): Check karna variable set hai
- filter_var(): Data sanitize aur validate
- htmlspecialchars(): XSS attacks se bachao


/* SESSIONS & COOKIES */

Session:
- Server-side storage
- session_start(): Session shuru karna
- $_SESSION: Session data store
- session_destroy(): Session khatam karna

Cookie:
- Client-side storage (browser mein)
- setcookie(): Cookie banana
- $_COOKIE: Cookie data access
- Limited size (4KB)


/* REGULAR EXPRESSIONS (REGEX) */

Pattern matching ke liye:

- preg_match(): Pattern match check
- preg_replace(): Pattern ke base par replace
- preg_split(): Pattern se split karna
- Metacharacters: ^, $, ., *, +, ?, [], (), |, \


/* DATE & TIME */

Date aur time functions:

- date(): Format mein date/time
- time(): Current timestamp
- strtotime(): String ko timestamp mein convert
- mktime(): Specific date/time ka timestamp
- Common formats: Y-m-d, H:i:s, d/m/Y


/* JSON */

JavaScript Object Notation:

- json_encode(): PHP array/object ko JSON mein convert
- json_decode(): JSON ko PHP array/object mein convert
- JSON_PRETTY_PRINT: Readable format
- API communication ke liye zaroori


/* CONSTANTS */

Fixed values jo change nahi hoti:

- define("NAME", "value"): Global constant
- const NAME = "value": Class constant
- Magic constants: __LINE__, __FILE__, __DIR__, __FUNCTION__, __CLASS__


/* MISCELLANEOUS */

- Ternary Operator (?:): Short if-else
- Null Coalescing Operator (??): Default value set karna
- Spaceship Operator (<=>): Comparison (-1, 0, 1 return)
- Variable Variables: $$variable
- die()/exit(): Script ko terminate karna
- var_dump(): Variable ki complete information
- print_r(): Array/object ko readable form mein print
- isset() vs empty() vs is_null()

?>