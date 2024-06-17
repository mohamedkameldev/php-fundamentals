<?php


/*
 * An operator takes one or more values, known as operands, and performs a specific operation on them.
 *
 * PHP operators precedence:
 *      1. Unary Operators
 *          clone
 *          new
 *
 *      2. Array Operators
 *          [...] (array subscript)
 *          [...] (array dereference)
 *
 *      3. Member Access Operators
 *          -> (object member access)
 *          :: (static member access, class constant access, method call, and class name resolution)
 *
 *      4. Increment/Decrement Operators
 *          ++ (pre-increment)
 *          -- (pre-decrement)
 *          ++ (post-increment)
 *          -- (post-decrement)
 *
 *      5. Arithmetic Operators
 *          ** (exponentiation)
 *
 *      6. Unary Operators
 *          + (unary plus)
 *          - (unary minus)
 *          ! (logical negation)
 *          ~ (bitwise negation)
 *          (int), (integer) (cast to int)
 *          (bool), (boolean) (cast to bool)
 *          (float), (double), (real) (cast to float)
 *          (string) (cast to string)
 *          (array) (cast to array)
 *          (object) (cast to object)
 *          (unset) (cast to NULL)
 *          @ (error control operator)
 *
 *      7. Multiplicative Operators
 *          * (multiplication)
 *          / (division)
 *          % (modulus)
 *
 *      8. Additive Operators
 *          + (addition)
 *          - (subtraction)
 *          . (concatenation)
 *
 *      9. Shift Operators
 *          << (left shift)
 *          >> (right shift)
 *
 *      10. Relational Operators
 *          < (less than)
 *          <= (less than or equal to)
 *          > (greater than)
 *          >= (greater than or equal to)
 *
 *      11. Equality Operators
 *          == (equal)
 *          != (not equal)
 *          === (identical)
 *          !== (not identical)
 *          <=> (spaceship)
 *
 *      12. Bitwise Operators
 *          & (bitwise AND)
 *          ^ (bitwise XOR)
 *          | (bitwise OR)
 *
 *      13. Logical Operators
 *          && (logical AND)
 *          || (logical OR)
 *          ! (logical NOT)
 *
 *      14. Ternary Operator
 *          ?: (ternary operator, conditional assignment)
 *
 *      15. Null Coalescing Operator
 *          ?? (null coalescing)
 *
 *      16. Assignment Operators
 *          = (assignment)
 *          += (addition assignment)
 *          -= (subtraction assignment)
 *          *= (multiplication assignment)
 *          /= (division assignment)
 *          %= (modulus assignment)
 *          .= (concatenation assignment)
 *          &= (bitwise AND assignment)
 *          |= (bitwise OR assignment)
 *          ^= (bitwise XOR assignment)
 *          <<= (left shift assignment)
 *          >>= (right shift assignment)
 *          **= (exponentiation assignment)
 *
 *      17. Logical Operators with Lower Precedence
 *          and (logical AND)
 *          xor (logical XOR)
 *          or (logical OR)
 */
