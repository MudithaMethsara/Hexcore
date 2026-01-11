async function signin() {
    Notiflix.Loading.circle("System signin Processing");
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    const userloginObj = {email: email.value, password: password.value};
    try {
        const response = await fetch("/api/userlogin", {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(userLoginObj)
        });
        if (response.ok) {
            const data = await response.json();
            if (data.status) {
                Notiflix.Report.success(
                    'Hexcore',
                    data.message,
                    'Okay', //btn title
                    () => {
                        window.location = "index.html"
                    },
                );
            } else {
                Notiflix.Notify.failure(data.message, {
                    position: 'center-top'
                });
            }
        } else {
            Notiflix.Notify.failure("Login failed! Please try again", {
                position: 'center-top'
            });
        }
    } catch (e) {
        Notiflix.Notify.failure(e.message, {
            position: 'center-top'
        });
    } finally {
        Notiflix.Loading.remove(2000);
    }
}