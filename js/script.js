const saveBtn = document.getElementById('saveBtn') ;
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

const selectCourse = document.getElementById('courseSelection');
const radioBtn = document.getElementById('scheduleOption');
const textarea = document.getElementById('textarea');
const form = document.querySelector('form');

saveBtn.addEventListener('submit', (e) => {
    e.preventDefault;
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