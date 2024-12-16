The solution is to always use the strict equality operator (`===`) when comparing values in PHP, especially when dealing with user inputs or data from external sources.

```php
$a = '10';
$b = 10;

if ($a === $b) {
  echo "Equal";
} else {
  echo "Not equal";
}
```

This will ensure that the comparison is only true if both the value and the type are the same. This helps avoid unexpected behavior caused by PHP's type juggling.