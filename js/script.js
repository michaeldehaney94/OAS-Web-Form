const saveBtn = document.querySelector('#saveBtn');
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

const selectCourse = document.querySelector('#form-select');
const radioBtn = document.querySelector('#scheduleOption');
const textarea = document.querySelector('#textarea');
const form = document.querySelector('form');

saveBtn.addEventListener('submit', (e) => {
    checkInput();
    alert('Saved!');
})

nextBtn.addEventListener('submit', (e) => {
    checkInput();
    alert('Saved!');
})

function checkInput() {
    const courseValue = selectCourse.value;
    const radioBtnValue = radioBtn.value;
    const textareaValue = textarea.value;

    if (courseValue === '') {
        alert('Invalid! Please complete form.');
        return saveBtn.disabled = true;
    } else {
        return saveBtn.disabled = false;
    }

    if (radioBtnValue === '') {
        alert('Invalid! Please complete form.');
        return saveBtn.disabled = true;
        
    } else {
        return saveBtn.disabled = false;
    }

    if (textareaValue === '') {
        alert('Invalid! Please complete form.');
        return saveBtn.disabled = true;
    } else {
        return saveBtn.disabled = false;
    }
    //---------------------------------------------------------
    if (radioBtnValue === '') {
        alert('Invalid! Please complete form.');
        return nextBtn.disabled = true;
        
    } else {
        return nextBtn.disabled = false;
    }

    if (textareaValue === '') {
        alert('Invalid! Please complete form.');
        return nextBtn.disabled = true;
    } else {
        return nextBtn.disabled = false;
    }
}