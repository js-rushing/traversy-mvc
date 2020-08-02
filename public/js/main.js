var newDiv = document.createElement('div');
document.body.appendChild(newDiv);
newDiv.innerHTML = '<h4>JS is working</h4><br>';

var onDiv = document.createElement('div');
onDiv.setAttribute('class', 'on');
document.body.appendChild(onDiv);
onDiv.innerHTML = 'CSS <span class="off">not</span> functional';