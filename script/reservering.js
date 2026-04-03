window.addEventListener("DOMContentLoaded", function() {
    const btn = document.querySelector(".reservebtn");
    if (!btn) return;

    let message = document.getElementById("message-container");
    if (!message) {
        message = document.createElement("div");
        message.id = "message-container";
        btn.insertAdjacentElement("afterend", message);
    }

    btn.addEventListener("click", function() {
        const inputs = document.querySelectorAll("#placeholders input");

        for (let i = 0; i < inputs.length; i++) {
            if (!inputs[i].value) {
                message.textContent = "Vul eerst alle velden in!";
                message.className = "error";
                inputs[i].focus();
                return;
            }
        }

        message.textContent = "Reservatie gelukt!";
        message.className = "success";

        console.log({
            naam: inputs[0].value,
            telefoon: inputs[1].value,
            email: inputs[2].value,
            aantal: inputs[3].value,
            datum: inputs[4].value,
            tijd: inputs[5].value,
            opmerkingen: inputs[6].value
        });

        inputs.forEach(input => input.value = "");
    });
});