document.getElementById('registration-form').addEventListener('submit', function (event) {
    event.preventDefault(); 
  
    let name = document.getElementById('name').value.trim();
    let email = document.getElementById('email').value.trim();
    let password = document.getElementById('password').value;
    let confirmPassword = document.getElementById('confirm-password').value;
  
    let isValid = true;
  
   
    document.getElementById('name-error').textContent = '';
    document.getElementById('email-error').textContent = '';
    document.getElementById('password-error').textContent = '';
    document.getElementById('confirm-password-error').textContent = '';
  
 
    if (name === '') {
      document.getElementById('name-error').textContent = 'Emri është i detyrueshëm!';
      isValid = false;
    }
  
    let emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (!emailPattern.test(email)) {
      document.getElementById('email-error').textContent = 'Ju lutem shkruani një email të saktë!';
      isValid = false;
    }
  
    if (password.length < 6) {
      document.getElementById('password-error').textContent = 'Fjalëkalimi duhet të jetë të paktën 6 karaktere!';
      isValid = false;
    }
  
    if (password !== confirmPassword) {
      document.getElementById('confirm-password-error').textContent = 'Fjalëkalimet nuk përputhen!';
      isValid = false;
    }
  
    if (isValid) {
    
      fetch('database/register_user.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
          name: name,
          email: email,
          password: password,
          'confirm-password': confirmPassword,
        }),
      })
      .then(response => response.text())
      .then(data => {
        alert(data);  
  
    
        document.getElementById('registration-form').reset();
      })
      .catch(error => {
        console.error('Gabim:', error);
      });
    }
  });
  
  function toggleMenu() {
    const links = document.querySelectorAll('.navbar a');
    links.forEach(link => link.classList.toggle('hide'));
  }
  