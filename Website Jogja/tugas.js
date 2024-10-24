const halo = "Selamat Datang Users";
alert(halo);

function showDetailsCard(cardId) {
  const detailsCard = document.getElementById(cardId);
  if (detailsCard) {
    detailsCard.style.display = "block";
  } else {
    console.error(`Element with id "${cardId}" not found.`);
  }
}

function closeDetailsCard(cardId) {
  const detailsCard = document.getElementById(cardId);
  if (detailsCard) {
    detailsCard.style.display = "none";
  } else {
    console.error(`Element with id "${cardId}" not found.`);
  }
}

