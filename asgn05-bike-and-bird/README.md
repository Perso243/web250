# Bike and Bird Challenge
## Student
Eli Tardiff
## Course
WEB 250
## Project Overview
A test of all we've learned so far, including working with objects, static properties, constants, Git, and more. In addition, we will be parsing CSV files.
## Bike Challenge
Creating a program to store and display information on various bikes.
## Bird Challenge
Creating a program to store and display information on various birds in the NC area.
## Go Further Choices
1. Choice: 3
What you added: Static Finder
2. Choice: 4
What you added: __toString()
## Concept Check
### 1. Static Property vs Constant
Static properties and constants both are tied to the general object instead of a specific instance. However, static properties can be changed later, while constants cannot. `$delimiter` is a static property because it can be changed if you're using a different delimiter; `CATEGORIES` is a constant because you are never going to change the different bike categories on the fly.
### 2. Constructor `$args` Array
Because we use an associative array via `$args`, it doesn't matter if someone reorders the CSV columns. An associative array cares about keys and values, not indexes. If 10 positional parameters were used instead, it would massively reduce the flexibility of the program, because every parameter would have to be submitted in the same order every single time.
### 3. Public vs Protected
A setter can sanitize inputs, which direct property access does not do. This is especially important for numbers, such as `$wingspan_cm`.
### 4. Private `reset()`
If `reset()` could be called outside `ParseCSV`, it could very easily lead to situations where the parsed table is accidentally deleted.
### 5. `self::CONSERVATION_OPTIONS`
`CONSERVATION_OPTIONS` are a constant. This means the value doesn't (and can't) change among instances. As such, it is called like a static variable, tied to the overall object instead of any individual instance.
### 6. `money_format()` vs `number_format()`
`money_format` handles complete formatting including whitespace and money symbols (e.g. '$'). In comparison, `number_format()` only formats the actual decimal. If an application intends to sell to customers in various currencies, making a custom method to auto format would be how I would do it.
## Git History
Paste the output of:
```text
* 43275a7 (HEAD -> main, origin/main, origin/HEAD, asgn05-bird) asgn05-bird: Completed README.md questions.
* bcd53c9 asgn05-bird: Completed go further option 4.
* 18a46be asgn05-bird: Completed go further option 3.
* ca54a09 asgn05-bird: Create table on birds.php
* 5cf4bde asgn05-bird: Finished Bird class methods.
* 0343088 asgn05-bird: Created Bird class variables and constructor.
* 897a95e (asgn05-bike) asgn05-bike: Completed the assignment, using the LinkedIn learning course as a guide.
* 5f32677 Updated .gitignore and made a readme for bikes and birds assignment.
```
## AI Log
- Question asked: none
- How the answer was used: n/a
