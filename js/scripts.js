function toggleMenu() {
    document.getElementById("primaryNav").classList.toggle('hide');
}

let path = location.href;

console.log(path);

let resultsArray = path.split('/');

console.log(resultsArray);

let numberOfParts = resultsArray.length;

console.log(numberOfParts - 1);


let pageName = resultsArray[5];

console.log('>>>>>>>>>' + pageName);





let navItems = document.querySelectorAll("ul#primaryNav li a");
console.log(navItems);


let i;

for (i = 0; i < navItems.length; i++) {

    let myPage = navItems[i].getAttribute("href");
    console.log(myPage);

    if (pageName === myPage) {
        navItems[i].parentNode.className = "active";
        console.log(navItems[i]);
    } else {
        navItems[i].parentNode.className = "";
    }
} //end of loop

