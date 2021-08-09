const saveBtn = document.querySelector('#saveBtn');
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

const textbox = document.querySelector('#textbox');
const addBtn1 = document.querySelector('#add-item1');
const addBtn2 = document.querySelector('#add-item2');
const ul = document.querySelector('ul');


saveBtn.disabled = true;
nextBtn.disabled =true;

saveBtn.addEventListener('submit', (e) => {
    checkInput();
    alert('Saved');

})

nextBtn.addEventListener('submit', (e) => {
    checkInput();
    alert('Saved');
})


function checkInput() {
    const textboxValue = textbox.value;
    const list = document.createElement('li');
    const addList = ul.appendChild(list);

    if (textboxValue === '') {
        return saveBtn.disabled = true;
    }
    
    if (textboxValue === '') {
        return nextBtn.disabled = true;
    }

    return alert('Invalid! Please complete form.');

    if(!addList) {
        return alert('Invalid! Please complete form.');
    }
}