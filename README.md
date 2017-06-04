

# GrivetDB
New NoSQL database running on PHP.

As GrivetDB is new, we are looking for many contributors to make it better and more secure. Happy programming!

# Documentation

When ready, documentation can be found here: https://grivetdb.org/documentation/

# Installation

1. Download GrivetDB.
2. Create a folder in the root of your directory and give it a random name (with random letters and numbers).
3. Put all of the GrivetDB files into the directory you just created.
4. Open the directory in a browser.
5. Follow the setup instructions.

You're ready to go! See the documentation.

# Use

```php

//Require grivet.php in any file that will be using GrivetDB in the beginning of your code.
require '/grivet/scripts/grivet.php';

//Calling a function
\grivet\db::foo();


```

Like any function, you can use GrivetDB functions in if() statements or you can simply echo their data.

```php

if(\grivet\db::foo()) {
  //More code...
}

//Or

echo \grivet\db::foo();

?>


```
