import Slider from './components/Slider';

let arr = [2,3,4,5];
const res = arr.map(item => item * 2)
console.log(res);

function init(){
    Slider();
}

window.addEventListener('DOMContentLoaded', () => init() );