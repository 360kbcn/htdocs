function mayor(a,b,c){
  if (a>b || a>c){
    return a;
  }else(b>c){
    return b;
  }
  return c;
}

console.log(mayor(1,7,9));
console.log(mayor(9,1,7));
console.log(mayot(1,9,7));
