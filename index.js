//html class
const profile = document.querySelector(".profile--js");


//first name and last name
const firstName = "Puszek";
const surName = "Okruszek";

//age and gender
const age = "8";
const gender = "M";

//contact
const phone = "123456789";
const email = "puszek92@gmail.com";

//address
const street = "oś Witosa 5a/6";
const postalCode = "83-140";
const city = "Gniew";

//description
const description = "Mój kitku jest wspaniały";

//template
const template = `
    <main class="profile">
      <div class="profile-box">
        <img class="profile-box__image" src="https://kamilMalinowski.github.io/ghicon.svg" alt="" />
        ${firstName} ${surName}
        <div class="profile-box__item">(${age}${gender})</div>
        <div class="profile-box__item">${phone}</div>
        <div class="profile-box__item">${email}</div>
      </div>

      <div class="profile-box">
        Miejsce zamieszkania:
        <div class="profile-box__item">${street}</div>
        <div class="profile-box__item">${postalCode}</div>
        <div class="profile-box__item">${city}</div>
      </div>

      <div class="profile-box">
        Opis pupila:
        <div class="profile-box__item">${description}</div>
      </div>
    </main>
    `;

profile.innerHTML = template;
