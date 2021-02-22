function pow(x, n) {
    let pow_x = 1;
    for (let i = 1; i <= n; i++) {
        pow_x *= x;
    }
    console.log(pow_x);
}

let x = prompt('Введите значение x', '');
let n = prompt('Введите значение степени n', '');
while (n<0) {
    alert ('Значение n должно быть неотрицательным');
    n = prompt('Введите значение степени n', '');
}
pow(x, n);