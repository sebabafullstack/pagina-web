//QUERYSELECTOR
const heading = document.querySelector(".header__texto h2")  // 0 o 1 elemento
heading.textContent = "nuevo heading"
console.log(heading)

//QUERYSELECTORALL
const enlaces = document.querySelectorAll(".navegacion a")
console.log(enlaces[0])

// GETELEMENTBYID