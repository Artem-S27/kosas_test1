// Функция вывода результата
function output(res) {
    document.getElementById('result').innerHTML = res;
}
// Функция приема данных и расчета   
function change() {
    let val = document.getElementById('operation').value;
    let fnum = document.getElementById("first_number").value;
    let snum = document.getElementById("second_number").value;
    if (val === 'addition') {
        let res = +fnum + +snum;
        output(res);
    }
    if (val === 'subtraction') {
        let res = +fnum - +snum;
        output(res);
    }
    if (val === 'multiplication') {
        let res = +fnum * +snum;
        output(res);
    }
    if (val === 'division') {
        let res = +fnum / +snum;
        output(res);
    }
}

document.getElementById('calc').addEventListener('click', change);