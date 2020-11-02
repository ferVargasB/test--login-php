

const form = document.getElementsByTagName('form')[0];

form.addEventListener('submit', e => {
    e.preventDefault();

    try {
        
        document.getElementById('submit').classList.add('disabled');
        get_password();

    } catch (error) {
        alert(error);
    }
    
});

async function get_password(){

    const form_data = new FormData();
    form_data.append('nuevo','1');

    const response = await fetch('../back/login_model.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: form_data
    });

    const data = await response.json();

    console.log(data);
    document.getElementById('submit').classList.remove('disabled');
}

