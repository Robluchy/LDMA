
var cards = ["", "", "", "", "", "", "", "", ""];

// couples game logic 
function game() {

    // shuffle cards
    cards = shuffle(cards);

    // set cards
    for (var i = 0; i < cards.length; i++) {
        document.getElementById("card" + (i + 1)).src = "images/" + cards[i] + ".png";
    }
}

 