const name = document.getElementById("fname");
const email = document.getElementById("email");
const subject = document.getElementById("subject");
const massage = document.getElementById("massage");
const submit = document.querySelector(".contact");




submit.addEventListener("submit", (event) => {
  event.preventDefault(); 
  
  // Get the values of the form fields
  const nameValue = name.value;
  const emailValue = email.value;
  const subjectValue = subject.value;
  const massageValue = massage.value;

  // Send an email with the form data
  const ajaxOptions = {
    method: "POST",
    url: "contact.php",
    data: {
      name: nameValue,
      email: emailValue,
      subject: subjectValue,
      massage: massageValue,
    },
  };

  fetch(ajaxOptions.url, {
    method: ajaxOptions.method,
    body: JSON.stringify(ajaxOptions.data),
    headers: {
      'Content-Type': 'application/json'
    }
  })
  .then((response) => {
    if (response.ok) {
      console.log("Success! Your message has been sent.");
    } else {
      console.log("Error! Something went wrong.");
    }
  })
  .catch((error) => {
    console.log("Error! Something went wrong.");
  });
});