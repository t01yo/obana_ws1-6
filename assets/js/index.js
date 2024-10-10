
const announcementsToDisplay = 3;
var bitress = {
    URI: {
        announcement_api: "ispsc-api/announcements.php"
    },
    quotes: [
            "The road to success and the road to failure are almost exactly the same.",
            "The only thing that overcomes hard luck is hard work.",
            "Success is not just about making money. It's about making a difference.",
            "The future belongs to those who believe in the beauty of their dreams.",       
    ],
    Utils: {},
    Http: {}
};

bitress.Utils.marqueeChange = function (){
      
    var marquee = document.getElementById("footer-marquee");
    var randomIndex = Math.floor(Math.random() * bitress.quotes.length);
    marquee.textContent = bitress.quotes[randomIndex];
      
}

bitress.Utils.fetchAnnouncements = function () {
    fetch(bitress.URI.announcement_api)
        .then(response => {
            return response.json();
        })
        .then(data => {
            const announcements = data;

            announcements.sort((a, b) => new Date(b.announcement_date) - new Date(a.announcement_date));

            const latestAnnouncements = announcements.slice(0, announcementsToDisplay);
            var placeholder = document.getElementById("announcements");
            latestAnnouncements.forEach(e => {
                placeholder.innerHTML += `<li style="margin-bottom: 8px">${bitress.Utils.formatDate(e.announcement_date)} : ${e.announcement_content}</li>`;
            });
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
};

bitress.Utils.toggleNav = function () {
    const hamburger = document.querySelector("#hamburger");
    const navList = document.querySelector(".nav-link");

    hamburger.addEventListener("click", function () {
        navList.classList.toggle("navbar-toggled");
    });
};

bitress.Utils.clock = function () {
    const currentDate = new Date();

    const months = [
        "January", "February", "March", "April",
        "May", "June", "July", "August",
        "September", "October", "November", "December"
    ];

    const daysOfWeek = [
        "Sunday", "Monday", "Tuesday", "Wednesday",
        "Thursday", "Friday", "Saturday"
    ];

    const dayOfWeek = daysOfWeek[currentDate.getDay()];
    const month = months[currentDate.getMonth()];
    const day = currentDate.getDate();
    const year = currentDate.getFullYear();
    const hours = currentDate.getHours();
    const minutes = currentDate.getMinutes();
    const seconds = currentDate.getSeconds();
    const ampm = hours >= 12 ? "PM" : "AM";

    const formattedTime = `${dayOfWeek}, ${month} ${day}, ${year}, ${hours}:${minutes}:${seconds} ${ampm}`;

    const pstTime = document.querySelector("#pst-time a");
    pstTime.textContent = formattedTime;
};


bitress.Utils.formatDate = function(inputDateString) {
    var date = new Date(inputDateString);

    var daysOfWeek = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
    var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var dayOfWeek = daysOfWeek[date.getDay()];
    var day = date.getDate();
    var month = months[date.getMonth()];
    var year = date.getFullYear();

    return  month + " " + day + ", " + year;
}


const accordionItems = document.querySelectorAll('.accordion-item');
accordionItems.forEach(item => {
    const header = item.querySelector('.accordion-header');
    const content = item.querySelector('.accordion-content');

    header.addEventListener('click', () => {
        content.style.display = content.style.display === 'block' ? 'none' : 'block';
    });
});

bitress.Utils.clock();
setInterval(bitress.Utils.clock, 1000);
bitress.Utils.fetchAnnouncements();

document.addEventListener("DOMContentLoaded", function () {
    bitress.Utils.toggleNav();
    bitress.Utils.marqueeChange();
});



let currentSlide = 1;
const totalSlides = document.querySelectorAll('input[name="radio-buttons"]').length;

function showSlide(slideNumber) {
  document.querySelector(`#img-${slideNumber}`).checked = true;
}

function nextSlide() {
  currentSlide = (currentSlide % totalSlides) + 1;
  showSlide(currentSlide);
}

setInterval(nextSlide, 5000);

console.log("Made with <3 by Cyanne Justin Vega");
var author = '<div style="position: fixed;bottom: 0;right: 20px;box-shadow: 0 4px 8px rgba(0,0,0,.05);border-radius: 3px 3px 0 0;font-size: 12px; opacity: 0.5; padding: 5px 10px;">Created by<a style="text-decoration: none; color: maroon" target="_blank" href="https://www.github.com/bitress"> Cyanne Justin Vega</a></div>';

const body = document.querySelector('body');
const authorElement = document.createElement('div');
authorElement.innerHTML = author;
body.appendChild(authorElement);
