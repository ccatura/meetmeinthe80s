const { createDiffieHellman } = require("crypto");
const express = require("express");
const path = require("path");

const quotes = [
    "Whoa!",
    "Dude!",
    "Gnarly!",
    "Totally!",
    "Gag me with a spoon!",
    "Bitchin'!",
    "Eat my shorts!",
    "Where's the beef?",
    "Tubular!",
    "Grody!",
    "Bodacious!",
    "Like, duh!",
    "Radical!",
    "Chill, dude!",
    "Spazoid!",
    "Neo-Maxi Zoomdweebie."

];

function getRandomQuote() {
    const randomIndex = Math.floor(Math.random() * quotes.length);
    return quotes[randomIndex];
}

const app = express();

app.get("/", function(req, res) {
    res.sendFile(path.join(__dirname, "index.html"));
});

app.get("/quote", function(req, res) {
    res
        .json({
            quote: getRandomQuote()
        })
        .end();
});

app.use("/", express.static("./"));

app.listen(3000);
console.log("listneing on http://localhost:3000");