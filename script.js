// Array of sample names
const names = [
    "Aria Willow",
    "Ezra Frost",
    "Luna Stone",
    "Silas Brook",
    "Harry Harryman", 
    "Steve Dungarees",
    "Bill Whitlingham",
    "Phil le de Carpalse",
    "Winston Piston",
    "John Caramel",
    "Ron Waffle", 
    "Richard Cheeseman", 
    "Hazel McFLurry",
    "Ken Turmoil",
    "John Pudding",
    "Aromatic Pat",
    "Dave Bowl",
    "Ricky Drinkingchocolate", 
    "Gary PLasters",
    "Karen Pancake", 
    "Humphrey Barcode"
    // Add more names as needed
  ];

  // Function to generate a random name
  function generateRandomName() {
    const randomIndex = Math.floor(Math.random() * names.length);
    return names[randomIndex];
  }

  // Update the content of the paragraph with a random name
  document.getElementById("randomName").innerText = generateRandomName();

  setupBurgerNav();


function setupBurgerNav() {
    const burger = document.querySelector("header svg");
    const nav = document.querySelector("nav ul");

    burger.addEventListener("click", function () {
        burger.classList.toggle("open");
        nav.classList.toggle("open");
    });
}

function getRandomInt(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}


var randomYear = getRandomInt(2020, 2023);


var randomMonth = getRandomInt(0, 11);


var randomDay = getRandomInt(1, 28);


var randomDate = new Date(randomYear, randomMonth, randomDay);


var formattedRandomDate = randomDate.toLocaleDateString("en-US", { year: 'numeric', month: 'long', day: 'numeric' });


document.getElementById("random-date").innerHTML = formattedRandomDate;