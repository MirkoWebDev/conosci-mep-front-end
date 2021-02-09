import './app.scss';

console.log('I\'ve never used Typescript, but I\'ll try!');

const btn = document.getElementById("magicButton");
if(btn){
    btn.addEventListener("click", (e: Event) => {
        if (btn.classList.contains('magic')) {
            btn.classList.remove('magic');
            alert('Nope still another alert :(');
        } else {
            btn.classList.add('magic');
            alert('No magic here :(! It was only an alert, maybe if I click again...');
        }
    });
}