let nama = "Richie";
console.log(nama);
let bilangan1 = 12;
let bilangan2 = 14;
console.log(bilangan1 + bilangan2);
if (bilangan1 < bilangan2) {
  console.log("bilangan 1 lebih kecil");
} else {
  console.log("bilangan 2 lebih kecil");
}
for (let i = 0; i < bilangan1; i++) {
  console.log("i: " + (i + 1));
}
let arr = [1, 2, 3, 4, 5];
for (let value of arr) {
  console.log(value);
}
//   Function declaration
function sayHello(nama) {
  console.log("Hello! " + nama);
}
sayHello("Richie");
//   Function expression
let sayHelloLet = function (nama) {
  console.log("Hello! " + nama);
};
sayHelloLet("Richie!");
//anonymous function + arrow function (JS ES6)
let nama2 = "Tes";
let sayHello2 = (nama2) => console.log("aku arrow function " + nama2);
sayHello2(nama2);
// Scope variable JS let vs var vs const
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/let
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/const
// https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Statements/var