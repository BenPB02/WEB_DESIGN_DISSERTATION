
const Main = document.querySelector('.main-screen');
const PokemonName = document.querySelector('.poke-name');
const ID = document.querySelector('.poke-id');
const FrontImage = document.querySelector('.poke-front-image');
const BackImage = document.querySelector('.poke-back-image');
const TypeOne = document.querySelector('.poke-type-one');
const TypeTwo = document.querySelector('.poke-type-two');
const weight = document.querySelector('.poke-weight');
const Height = document.querySelector('.poke-height');
const ListItems = document.querySelectorAll('.list-item');
const leftButton = document.querySelector('.left-button');
const rightButton = document.querySelector('.right-button');


const TYPES = [
  'normal', 'fighting', 'flying',
  'poison', 'ground', 'rock',
  'bug', 'ghost', 'steel',
  'fire', 'water', 'grass',
  'electric', 'psychic', 'ice',
  'dragon', 'dark', 'fairy'
];
let prevUrl = null;
let nextUrl = null;


const capitalize = (str) => str[0].toUpperCase() + str.substr(1);

const resetScreen = () => {
  Main.classList.remove('hide');
  for (const type of TYPES) {
    Main.classList.remove(type);
  }
};

const fetchPokeList = url => {
  fetch(url)
    .then(res => res.json())
    .then(data => {
      const { results, previous, next } = data;
      prevUrl = previous;
      nextUrl = next;

      for (let i = 0; i < ListItems.length ; i++) {
        const pokeListItem = ListItems[i];
        const resultData = results[i];

        if (resultData) {
          const { name, url } = resultData;
          const urlArray = url.split('/');
          const id = urlArray[urlArray.length - 2];
          pokeListItem.textContent = id + '. ' + capitalize(name);
        } else {
          pokeListItem.textContent = '';
        }
      }
    });
};

const fetchPokeData = id => {
  fetch(`https://pokeapi.co/api/v2/pokemon/${id}`)
    .then(res => res.json())
    .then(data => {
      resetScreen();

      const dataTypes = data['types'];
      const dataFirstType = dataTypes[0];
      const dataSecondType = dataTypes[1];
      TypeOne.textContent = capitalize(dataFirstType['type']['name']);
      if (dataSecondType) {
        TypeTwo.classList.remove('hide');
        TypeTwo.textContent = capitalize(dataSecondType['type']['name']);
      } else {
        TypeTwo.classList.add('hide');
        TypeTwo.textContent = '';
      }
      Main.classList.add(dataFirstType['type']['name']);

      PokemonName.textContent = capitalize(data['name']);
      ID.textContent = '#' + data['id'].toString().padStart(3, '0');
      weight.textContent = data['weight'];
      Height.textContent = data['height'];
      FrontImage.src = data['sprites']['front_default'] || '';
      BackImage.src = data['sprites']['back_default'] || '';
    });
};

const handleLeftButtonClick = () => {
  if (prevUrl) {
    fetchPokeList(prevUrl);
  }
};

const handleRightButtonClick = () => {
  if (nextUrl) {
    fetchPokeList(nextUrl);
  }
};

const handleListItemClick = (e) => {
  if (!e.target) return;

  const listItem = e.target;
  if (!listItem.textContent) return;

  const id = listItem.textContent.split('.')[0];
  fetchPokeData(id);
};



leftButton.addEventListener('click', handleLeftButtonClick);
rightButton.addEventListener('click', handleRightButtonClick);
for (const pokeListItem of ListItems) {
  pokeListItem.addEventListener('click', handleListItemClick);
}

fetchPokeList('https://pokeapi.co/api/v2/pokemon?offset=0&limit=20');







