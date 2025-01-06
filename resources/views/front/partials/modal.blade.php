<!-- Register Modal -->
<div class="modal-overlay" id="register-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Qeydiyyat</h2>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <form id="register-form">
                @csrf
                <div class="form-group">
                    <label for="name">Ad</label>
                    <input type="text" id="name" name="name" placeholder="Adınızı daxil edin" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="register-email" name="email" placeholder="Email ünvanınızı daxil edin" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifrə</label>
                    <input type="password" id="register-password" name="password" placeholder="Şifrənizi daxil edin" required>
                </div>
                <div class="form-group">
                    <label for="confirm-password">Şifrəni təsdiqləyin</label>
                    <input type="password" id="confirm-password" name="confirm_password" placeholder="Şifrənizi yenidən daxil edin" required>
                </div>
                <div class="form-group">
                    <label for="phone">Telefon nömrəsi</label>
                    <input type="tel" id="phone" name="phone" placeholder="Telefon nömrənizi daxil edin" required>
                </div>
                <button type="submit" class="submit-btn">Qeydiyyatdan keçin</button>
            </form>
            <p>Hesabınız var? <a href="#" id="switch-to-login">Daxil olun</a></p>
            <p><a href="#" id="forgot-password-link">Şifrəni unutmusunuz?</a></p>
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal-overlay" id="login-modal">
    <div class="modal-content">
        <div class="modal-header">
            <h2>Daxil Ol</h2>
            <span class="close-modal">&times;</span>
        </div>
        <div class="modal-body">
            <form id="login-form" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="login-email" name="email" placeholder="Email ünvanınızı daxil edin" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifrə</label>
                    <input type="password" id="login-password" name="password" placeholder="Şifrənizi daxil edin" required>
                </div>
                <button type="submit" class="submit-btn">Daxil Ol</button>
            </form>
            <p>Hesabınız yoxdur? <a href="#" id="switch-to-register">Qeydiyyat</a></p>
            <p><a href="#" id="forgot-password-link">Şifrəni unutmusunuz?</a></p>
        </div>
    </div>
</div>

<style>
    .modal-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .modal-content {
        background-color: #ffffff;
        padding: 40px;
        border-radius: 8px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
        width: 400px;
        max-width: 90%;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .modal-header h2 {
        margin: 0;
        font-size: 24px;
        color: #333;
    }

    .close-modal {
        cursor: pointer;
        font-size: 18px;
        color: #999;
    }

    .modal-body {
        display: flex;
        flex-direction: column;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        font-size: 14px;
        color: #555;
        margin-bottom: 5px;
    }

    .form-group input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 14px;
        color: #333;
    }

    .submit-btn {
        padding: 12px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }

    .modal-body p {
        margin-top: 10px;
        font-size: 14px;
        color: #777;
        text-align: center;
    }

    .modal-body p a {
        color: #007BFF;
        text-decoration: none;
        font-weight: bold;
    }

    .modal-body p a:hover {
        text-decoration: underline;
    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const registerModal = document.getElementById('register-modal');
        const loginModal = document.getElementById('login-modal');
        const openRegisterBtn = document.querySelector('.register-navbar');
        const openLoginBtn = document.querySelector('.login-navbar');
        const closeButtons = document.querySelectorAll('.close-modal');
        const switchToLogin = document.getElementById('switch-to-login');
        const switchToRegister = document.getElementById('switch-to-register');

        openRegisterBtn.addEventListener('click', function (e) {
            e.preventDefault();
            registerModal.style.display = 'flex';
        });

        openLoginBtn.addEventListener('click', function (e) {
            e.preventDefault();
            loginModal.style.display = 'flex';
        });

        closeButtons.forEach(function (btn) {
            btn.addEventListener('click', function () {
                registerModal.style.display = 'none';
                loginModal.style.display = 'none';
            });
        });

        switchToLogin.addEventListener('click', function (e) {
            e.preventDefault();
            registerModal.style.display = 'none';
            loginModal.style.display = 'flex';
        });

        switchToRegister.addEventListener('click', function (e) {
            e.preventDefault();
            loginModal.style.display = 'none';
            registerModal.style.display = 'flex';
        });

        window.addEventListener('click', function (e) {
            if (e.target === registerModal || e.target === loginModal) {
                registerModal.style.display = 'none';
                loginModal.style.display = 'none';
            }
        });

        const registerForm = document.getElementById('register-form');
        registerForm.addEventListener('submit', async function(e) {
            e.preventDefault();
            const password = document.getElementById('register-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;

            if (password !== confirmPassword) {
                alert('Şifrələr uyğun gəlmir!');
                return;
            }

            const formData = {
                name: document.getElementById('name').value,
                email: document.getElementById('register-email').value,
                phone: document.getElementById('phone').value,
                password: password,
                password_confirmation: confirmPassword,
            };

            try {
                const response = await fetch('/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify(formData),
                });

                const result = await response.json();
                if (response.ok) {
                    alert(result.message);
                    registerModal.style.display = 'none';
                } else {
                    if (result.errors) {
                        Object.keys(result.errors).forEach(function (key) {
                            const error = result.errors[key];
                            alert(`${key}: ${error.join(', ')}`);
                        });
                    }
                }
            } catch (error) {
                console.error('Error:', error);
                alert('Kayıt işlemi sırasında bir hata oluştu.');
            }
        });

        const loginForm = document.getElementById('login-form');
        loginForm.addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = {
                email: document.getElementById('login-email').value,
                password: document.getElementById('login-password').value,
            };

            console.log('CSRF Token:', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));

            try {
                const response = await fetch('{{ route('login') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                    },
                    body: JSON.stringify(formData),
                });

                const result = await response.json();
                if (response.ok) {
                    const redirectUrl = result.redirect_url;
                    if (redirectUrl) {
                        window.location.href = redirectUrl;
                    }
                } else {
                    alert(result.message || 'Giriş işlemi başarısız');                }
            } catch (error) {
                console.error('Error:', error);
                alert('Giriş işlemi sırasında bir hata oluştu.');
            }
        });



    });
</script>
