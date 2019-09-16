// get our variables 
const submit = document.getElementById('submit')
const error = document.getElementById('error')

const Submit = () => {
    const name = document.getElementById('name').value
    const username = document.getElementById("username").value
    const email = document.getElementById('email').value
    const phoneNumber = document.getElementById('phone').value
    const password = document.getElementById('password').value
    const confirmPassword = document.getElementById('confirm-password').value
    const checkbox = document.getElementById('check')
    if ((password !== confirmPassword) || !checkbox.checked) {
        error.style.display = 'block'
        error.textContent = "Please check password or click on the checkbox"
        setTimeout(() => {
            error.style.display = 'none'
        }, 3500)
    } else if (password == confirmPassword || checkbox.checked) {
        error.style.display = 'block'
        error.style.backgroundColor = 'green'
        error.style.color = '#e59500'
        error.textContent = "Log In Sucessful"
        setTimeout(() => {
            error.style.display = 'none'
        }, 3500)
    }
}
submit.addEventListener('click', e => {
    e.preventDefault()
    Submit();
})
