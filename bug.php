function foo(a, b) {
  if (a === 0 || b === 0) {
    return 0; 
  } 
  return a + b; 
}

function bar(c, d) {
  return foo(c, d);
}

// Unexpected behavior when either c or d is null or undefined
var result = bar(null, 5);
console.log(result); //Outputs NaN instead of 5 because foo function does not handle null or undefined parameters properly. 