const signUpButton = document.getElementById('signUp');
	const signInButton = document.getElementById('signIn');
	const signInBtn2 = document.getElementById('sign-in-btn2');
	const signUpBtn2 = document.getElementById('sign-up-btn2');
	const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
    document.querySelector(".overlay-left").classList.add("active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
    document.querySelector(".overlay-left").classList.remove("active");
});

// Fungsi untuk mengaktifkan panel sign in
function showSignIn() {
    container.classList.remove("right-panel-active");
    document.querySelector(".overlay-left").classList.remove("active");
}

// Fungsi untuk mengaktifkan panel sign up
function showSignUp() {
    container.classList.add("right-panel-active");
    document.querySelector(".overlay-left").classList.add("active");
}

// Tambahkan event listener untuk tombol sign-in-btn2 dan sign-up-btn2
signInBtn2.addEventListener('click', showSignIn);
signUpBtn2.addEventListener('click', showSignUp);